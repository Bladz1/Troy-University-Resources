#include <iostream>
#include <cmath>
#include <cstdlib>

using namespace std;

class Polynomial
{
private:
	int degree;
	int* coefficients;
public:
	Polynomial();
	~Polynomial();
	Polynomial(const Polynomial&);
	int evaluate(int) const;
	void operator=(const Polynomial&);
	Polynomial operator+(const Polynomial&);
	Polynomial operator*(const Polynomial&);
	friend istream& operator>> (istream&, Polynomial&);
	friend ostream& operator<< (ostream&, const Polynomial&);
};


Polynomial::Polynomial()
{
	degree = 0;
	coefficients = nullptr;
}

Polynomial::~Polynomial()
{
	delete[] coefficients;
}

Polynomial::Polynomial(const Polynomial& polynomial)
{
	if (polynomial.coefficients == nullptr) {
		cerr << "Please input degree and coefficients for polynomial first." << endl;
		exit(1);
	}
	degree = polynomial.degree;
	coefficients = new int[degree + 1];
	for (int i = 0; i <= degree; i++) {
		coefficients[i] = polynomial.coefficients[i];
	}
}

int Polynomial::evaluate(int number) const
{
	if (coefficients == nullptr) {
		cerr << "Please input degree and coefficients for polynomial first." << endl;
		exit(1);
	}
	int sum = coefficients[0];
	for (int i = 1; i <= degree; i++) {
		sum += coefficients[i] * pow(number, i);
	}
	return sum;
}

void Polynomial::operator=(const Polynomial& polynomial)
{
	if (polynomial.coefficients == nullptr) {
		cerr << "Please input degree and coefficients for polynomial first." << endl;
		exit(1);
	}
	if (coefficients) delete[] coefficients;
	degree = polynomial.degree;
	coefficients = new int[degree + 1];
	for (int i = 0; i <= degree; i++) {
		coefficients[i] = polynomial.coefficients[i];
	}
}

Polynomial Polynomial::operator+(const Polynomial& polynomial)
{
	if (coefficients == nullptr || polynomial.coefficients == nullptr) {
		cerr << "Please input degree and coefficients for polynomial first." << endl;
		exit(1);
	}
	Polynomial temp;
	if (degree >= polynomial.degree) {
		temp.degree = degree;
		temp.coefficients = new int[degree + 1];
		for (int i = 0; i <= degree; i++) {
			temp.coefficients[i] = 0;
			temp.coefficients[i] += coefficients[i];
		}
		for (int i = 0; i <= polynomial.degree; i++) {
			temp.coefficients[i] += polynomial.coefficients[i];
		}
	}
	else {
		temp.degree = polynomial.degree;
		temp.coefficients = new int[polynomial.degree + 1];
		for (int i = 0; i <= polynomial.degree; i++) {
			temp.coefficients[i] = 0;
			temp.coefficients[i] += polynomial.coefficients[i];
		}
		for (int i = 0; i <= degree; i++) {
			temp.coefficients[i] += coefficients[i];
		}
	}
	return temp;
}

Polynomial Polynomial::operator*(const Polynomial& polynomial)
{
	if (coefficients == nullptr || polynomial.coefficients == nullptr) {
		cerr << "Please input degree and coefficients for polynomial first." << endl;
		exit(1);
	}
	Polynomial temp;
	temp.degree = degree + polynomial.degree;
	temp.coefficients = new int[temp.degree + 1];
	for (int i = 0; i <= temp.degree; i++) {
		temp.coefficients[i] = 0;
	}
	for (int i = 0; i <= degree; i++) {
		for (int j = 0; j <= polynomial.degree; j++) {
			temp.coefficients[i + j] += coefficients[i] * polynomial.coefficients[j];
		}
	}
	return temp;
}

istream& operator>>(istream& in, Polynomial& polynomial)
{
	if (polynomial.coefficients) delete[] polynomial.coefficients;
	cout << "Enter degree for polynomial: ";
	in >> polynomial.degree;
	polynomial.coefficients = new int[polynomial.degree + 1];
	for (int i = 0; i <= polynomial.degree; i++) {
		cout << "Enter coefficient a" << i << ": ";
		in >> polynomial.coefficients[i];
		while (polynomial.coefficients[polynomial.degree] == 0 && polynomial.degree != 0) {
			cerr << "a" << polynomial.degree << " can't be 0. Please try again: ";
			in >> polynomial.coefficients[polynomial.degree];
		}
	}
	return in;
}

ostream& operator<<(ostream& out, const Polynomial& polynomial)
{
	if (polynomial.coefficients == nullptr) {
		cerr << "Please input degree and coefficients for polynomial first." << endl;
		exit(1);
	}
	out << "Polynomial is: ";
	if (polynomial.degree == 0) out << polynomial.coefficients[0] << endl;
	else if (polynomial.degree == 1 && polynomial.coefficients[0] != 0) out << polynomial.coefficients[0] << " + " << polynomial.coefficients[1] << "x" << endl;
	else if (polynomial.degree == 1 && polynomial.coefficients[0] == 0) out << polynomial.coefficients[1] << "x" << endl;
	else {
		for (int i = 0; i <= polynomial.degree; i++) {
			if (polynomial.coefficients[i] < 0) {
				if (i == 0) out << polynomial.coefficients[i] << " ";
				else if (i == 1) out << polynomial.coefficients[i] << "x ";
				else if (i == polynomial.degree) out << polynomial.coefficients[i] << "x^" << polynomial.degree << endl;
				else out << polynomial.coefficients[i] << "x^" << i << " ";
			}
			else if (polynomial.coefficients[i] == 0 && polynomial.degree != 0 && i != 0) out << "";
			else if (polynomial.coefficients[0] == 0 && polynomial.degree != 0) {
				if (i == 0) out << "";
				else if (i == 1) out << polynomial.coefficients[i] << "x ";
				else if (i == polynomial.degree) out << "+ " << polynomial.coefficients[i] << "x^" << polynomial.degree << endl;
				else out << "+ " << polynomial.coefficients[i] << "x^" << i << " ";
			}
			else {
				if (i == 0) out << polynomial.coefficients[i] << " ";
				else if (i == 1) out << "+ " << polynomial.coefficients[i] << "x ";
				else if (i == polynomial.degree) out << "+ " << polynomial.coefficients[i] << "x^" << polynomial.degree << endl;
				else out << "+ " << polynomial.coefficients[i] << "x^" << i << " ";
			}
		}
	}
	return out;
}


int main() {
	Polynomial p;
	cin >> p;
	int value;
	cout << "Value of x: ";
	cin >> value;
	cout << "Value of polynomial is: " << p.evaluate(value) << endl;
	cout << p;
	p = p + p;
	cout << p;
	p = p * p;
	cout << p;

	return 0;
}
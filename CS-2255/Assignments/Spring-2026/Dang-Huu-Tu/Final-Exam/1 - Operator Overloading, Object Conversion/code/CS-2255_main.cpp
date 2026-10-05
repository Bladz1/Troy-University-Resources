#include <iostream>

using namespace std;

class Point2D {
private:
    int x;
    int y;

public:
    // Constructor 
    Point2D(int x = 0, int y = 0) {
        this->x = x;
        this->y = y;
    }

    // ==========================================
    Point2D operator+(const Point2D& other) {
        Point2D result; 
        
        result.x = this->x + other.x; 
        result.y = this->y + other.y;
        
        return result; // Return the resulting point
    }

    // Function to print the point to the screen
    void print() {
        cout << "Coordinates: (" << x << ", " << y << ")" << endl;
    }
};

int main() {
    Point2D p1(2, 3);   // First point with coordinates (2, 3)
    Point2D p2(4, 5);   // Second point with coordinates (4, 5)
    
    // The compiler will automatically call the operator+ function above
    Point2D p3 = p1 + p2; 

    cout << "Point p1: "; p1.print();
    cout << "Point p2: "; p2.print();
    
    cout << "Result of p1 + p2: "; 
    p3.print();       // The result will print (6, 8)

    return 0;
}
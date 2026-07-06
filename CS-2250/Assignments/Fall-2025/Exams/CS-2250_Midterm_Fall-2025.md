# CS 2250: COMPUTER SCIENCE I
**MIDTERM EXAM (60 minutes)**  
**Lecturer:** Đặng Hữu Tú  
**Troy University**  

---

### I. Choose the correct answer. (20 pts)

**1. Every C++ program must have a**  

A. #include statement  
B. main function  
C. cout statement  
D. All of the above  

**2. Which of the following are graphical methods for representing algorithms?**

A. Pseudocode, hierarchy chart  
B. Hierarchy chart, flowchart  
C. Flowchart, pseudocode  
D. None of the above  

**3. Programmer – defined names of memory locations that may hold data are**
 
A. Syntax  
B. Operators  
C. Variables  
D. Literals  

**4. What is the value of ```3 + 3 * -3 + 17 % 3```?**

A. – 1  
B. – 4  
C. 3  
D. 1  

**5. What is the result of executing the following code?**

```cpp
int x = 056;  
cout << x << endl;
```

A. 056  
B. 56  
C. 66  
D. 46  

**6. What value will be stored in num1?**

```cpp
int num1, num2 = 4;  
float num3 = 3.3;  
num1 = num2 * num3;  
```

A. 13.2  
B. 13  
C. 12  
D. 12.2  

**7. The negation operator is:**

A. Unary  
B. Binary  
C. Ternary  
D. None of the above  

**8. What is the result of executing the following code?**

```cout << 7++ + --5 << endl;```

A. 12  
B. 13  
C. 14  
D. Compilation Error  

### II. True or False (20 pts)

| # | T | F | Question |
|---|---|---|---|
| 1 | T | F | Variable names may begin with a number. |
| 2 | T | F | x >= y is the same as (x > y && x == y). |
| 3 | T | F | The cout statement in the following program segment will display 8:<br> ```int x = 8;```<br> ```cout << ++x;``` |
| 4 | T | F | The for loop is a posttest loop. |
| 5 | T | F | When an if statement is nested in the if part of another statement, the only time the inner if is executed is when the expression of the outer if is true. |
| 6 | T | F | The continue statement causes a terminated loop to resume. |
| 7 | T | F | The scope of a variable is limited to the block in which it is defined. |
| 8 | T | F | When you call an ofstream object’s open member function, the specified file will be erased if it already exists. |

### III. What will the following programs print on the screen? (20 pts)

**Program A:**
```cpp
#include <iostream>
#include <iomanip>
using namespace std;
int main ()
{
    double x = 1.23456, y = 13;
    y /= 4;
    cout << setprecision (4);
    cout << x << endl << y << endl;
    return 0;
}
```

**Program B:**
```cpp
#include <iostream>
using namespace std;
int main ()
{
    for (int i = 1; i <= 5; i++)
    {
        for (int j = 1; j <= i; j++)
            cout << "*";
        cout << endl;
    }
    return 0;
}
```

### IV. Each of the following programs has some errors. Locate as many as you can. (30 pts)

**Program A:**
```cpp
#include <iostream>
using namespace std;
int main ()
{
    int a, b, c \\ Three integers
    a = 3
    b = 4
    c = a + b
    Cout < "The value of c is " < C;
    return 0;
}
```

**Program B:**
```cpp
#include <iostream>
using namespace std;
int main ()
{
    int numCount, total = 0;
    double average;

    cout << "How many numbers do you want to average? ";
    cin << numCount;
    for (int count = 0; count < numCount; count++)
    {
        int num;
        cout << "Enter a number: ";
        cin << num;
        total -= num;
        count++;
    }
    average = total / numCount;
    cout << "The average is << average << endl;
    return 0;
}
```

### V. Create a flowchart to solve the following problem:

Given that $n$ is a positive integer and $x$ is a floating – point number, calculate the sum:

$$ S = \frac{x}{1!} - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} + \dots + \frac{(-1)^n x^{2n+1}}{(2n+1)!} $$

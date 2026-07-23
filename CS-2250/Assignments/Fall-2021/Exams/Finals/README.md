**Lecturer: Tuan-Dung CAO**  
**Troy University**

# CS250 Computer Science I - Final Exam (120 minutes)

**1) (15 pts)**  
**a)** Write paragraph about pass by value and pass by reference parameter mechanism in C++, focus on the difference between them.  
**b)** What is the output of the following program and **Explain Why**?

```cpp
#include <iostream>
using namespace std;
void functionA(double a, int b) {
    cout << a << " " << b << endl;
    a = 12.0;   b = 4;
    cout << a << " " << b << endl;
}
int main() {
    int x = 0; double y = 7.5;
    cout << x << " " << y << endl;
    functionA(y, x);
    cout << x << " " << y << endl;
    return 0;
}
```

**2) (15 pts)** Write a function named **getOddNumber** that uses *a reference parameter variable* to accept an integer argument and has no return value. The function should prompt the user to enter an odd number in the range of 1 through 100, then stores the value in the parameter.  
*Input validation: The number should be checked for the validation using loop statement.*  

**3) (15 pts)** Define the following arrays:  
**a) alpha**, an 8-element array of chars initialized with the values ‘J’, ‘B’, ‘L’, ‘A’, ‘*’, ‘\$’, ‘H’, and ‘M’.  
**b) empNums**, a 100-element array of ints  
**c) cityName**, a 26-element array of string objects  

**4) (15 pts)** The following code totals the values in two arrays: numberArray1 and numberArray2. Both arrays have 16 elements. Will the code print the correct sum of values for both arrays? Why or why not?  

```cpp
int total = 0;          // Accumulator
int count;              // Loop counter
// Calculate and display the total of the first array.
for (count = 0; count < 15; count++)
    total += numberArray1[count];
cout << "The total for numberArray1 is " << total << endl;
// Calculate and display the total of the second array.
for (count = 0; count < 15; count++)
    total += numberArray2[count];
cout << "The total for numberArray2 is " << total << endl;
```

**5) (40 pts)**  
In a program you need to store integer numbers in an array having the maximum size 100. First the program asks the user to enter the number of integers then the value for each integer and store in the array. Once this data has been entered the program should:  
**a) (15 pts)** Display on the screen all array elements from the first element to the last element. Then display ***the sum of them***.  
**b) (5 pts)** Display the array in the reverse order (from the last element to the first element).  
**c) (10 pts)** Display the integers which are greater than 22 and divisible by 5 and 9.  
**d) (10 pts)** Display the minimum among odd numbers.  
*Input Validation: number of integers must be positive and smaller than the maximum size of the array.*  

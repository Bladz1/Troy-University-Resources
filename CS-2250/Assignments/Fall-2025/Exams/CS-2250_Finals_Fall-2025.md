**Lecturer: Huu-Tu DANG**  
**Troy University**

**CS250 Computer Science I - Final Exam (120 minutes)**

**1. (20pts)** Write a paragraph explaining the differences between local and global variables in C++. Give illustrative examples to demonstrate these differences.

**2. (20pts)** What is the output of the following program? Is it correct as expected? If not, explain why and suggest a correction.

```cpp
    // The target of this program is to sort an array in
    // descending order
    #include <iostream>
    using namespace std;
    int main() {
        const int SIZE = 10;
        int array[SIZE] = {5, 7, 2, 10, 3, 4, 6, 9, 8,1};

        for (int x = 0; x < SIZE; x++) {
            for (int y = 0; y < SIZE; y++) {
                if (array[x] < array[y]) {
                    int temp = array[x];
                    array[x] = array[y];
                    array[y] = temp;
                }
            }
        }

        for (int z = 0; z < SIZE; z++) {
            cout << array[z] << " ";
        }

        return 0;
    }
```

**3. (25pts)**  
**a) (15pts)** Write a function that accepts a **positive integer less than 1000** as input and prints the sum of all its divisors.  
**b) (10pts)** Write a function that accepts two parameters: a 2D array with size 3 x 3 and a column index. Return the minimum value in the specified column.  
*Input validation: Column index should be from 1 to 3.*

**4.** Write a program that stores positive integers in an array with a maximum size of 50. The program should first ask users to enter the number of integers, then the value for each integer and store all values in the array. Once this data has been entered, the program should:  
**a) (15 pts)** Display on the screen all array elements from first to last, the display their average.  
**b) (5 pts)** Display the index of the minimum integer.  
**c) (5 pts)** Count the number of odd integers that are greater than 30.  
**d) (5 pts)** Calculate the sum of all prime numbers.  
*Input Validation: number of integers must be smaller than the maximum size of the array and each element should be a positive integer.*

**5. (5pts)** Design a struture data (using struct) for complex numbers in the form $z = a + bi$, where a and b are the real and imaginary parts, respectively. Then, write functions for adding and multiplying complex numbers:

$$z_1 + z_2 = (a_1+a_2) + (b_1 + b_2)i$$
$$z_1 \cdot z_2 = (a_1a_2 - b_1b_2) + (a_1b_2 + a_2b_1)i$$

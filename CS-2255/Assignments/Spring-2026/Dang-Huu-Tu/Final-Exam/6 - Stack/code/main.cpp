// This program demonstrates the IntStack class.
#include <iostream>
#include "IntStack.h"
using namespace std;

int main()
{
    int catchVar; // To hold values popped off the stack

    // Define a stack object to hold 5 values.
    IntStack stack(5);

    // Push the values 5, 10, 15, 20, and 25 onto the stack.
    cout << "Pushing 5\n";
    stack.push(5);
    cout << "Pushing 10\n";
    stack.push(10);
    cout << "Pushing 15\n";
    stack.push(15);
    cout << "Pushing 20\n";
    stack.push(20);
    cout << "Pushing 25\n";
    stack.push(25);

    // Pop the values off the stack.
    cout << "Popping...\n";
    stack.pop(catchVar);
    cout << catchVar << endl;
    stack.pop(catchVar);
    cout << catchVar << endl;
    stack.pop(catchVar);
    cout << catchVar << endl;
    stack.pop(catchVar);
    cout << catchVar << endl;
    stack.pop(catchVar);
    cout << catchVar << endl;

    return 0;
}
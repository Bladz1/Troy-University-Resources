// Implementation file for the IntStack class
#include <iostream>
#include "IntStack.h"
using namespace std;

//***********************************************
// Constructor                                  *
// This constructor creates an empty stack. The *
// size parameter is the size of the stack.     *
//***********************************************

IntStack::IntStack(int size)
{
    stackArray = new int[size];
    stackSize = size;
    top = -1;
}

//***********************************************
// Copy constructor                             *
//***********************************************

IntStack::IntStack(const IntStack &obj)
{
    // Create the stack array.
    if (obj.stackSize > 0)
        stackArray = new int[obj.stackSize];
    else
        stackArray = nullptr;

    // Copy the stackSize attribute.
    stackSize = obj.stackSize;

    // Copy the stack contents.
    for (int count = 0; count < stackSize; count++)
        stackArray[count] = obj.stackArray[count];

    // Set the top of the stack.
    top = obj.top;
}

//***********************************************
// Destructor                                   *
//***********************************************

IntStack::~IntStack()
{
    delete [] stackArray;
}

//***********************************************
// Member function push pushes the argument onto *
// the stack.                                   *
//***********************************************

void IntStack::push(int num)
{
    if (isFull())
    {
        cout << "The stack is full.\n";
    }
    else
    {
        top++;
        stackArray[top] = num;
    }
}

//***********************************************
// Member function pop pops the value at the top *
// of the stack off, and copies it into the variable *
// passed as an argument.                       *
//***********************************************

void IntStack::pop(int &num)
{
    if (isEmpty())
    {
        cout << "The stack is empty.\n";
    }
    else
    {
        num = stackArray[top];
        top--;
    }
}

//***********************************************
// Member function isFull returns true if the stack *
// is full, or false otherwise.                 *
//***********************************************

bool IntStack::isFull() const
{
    bool status;

    if (top == stackSize - 1)
        status = true;
    else
        status = false;

    return status;
}

//***********************************************
// Member function isEmpty returns true if the stack *
// is empty, or false otherwise.                *
//***********************************************

bool IntStack::isEmpty() const
{
    bool status;

    if (top == -1)
        status = true;
    else
        status = false;

    return status;
}
// Specification file for the IntStack class
#ifndef INTSTACK_H
#define INTSTACK_H

class IntStack
{
private:
    int *stackArray;  // Pointer to the stack array
    int stackSize;    // The stack size
    int top;          // Indicates the top of the stack

public:
    // Constructor
    IntStack(int);

    // Copy constructor
    IntStack(const IntStack &);

    // Destructor
    ~IntStack();

    // Stack operations
    void push(int);
    void pop(int &);
    bool isFull() const;
    bool isEmpty() const;
};
#endif
// Specification file for the NumberList class
#ifndef NUMBERLIST_H
#define NUMBERLIST_H

class NumberList
{
private:
    // Declare a structure for the list
    struct ListNode
    {
        double value;
        struct ListNode *next;
    };

    ListNode *head;       // List head pointer

public:
    // Constructor
    NumberList()
        { head = nullptr; }

    // Destructor
    ~NumberList();

    // Linked List Operations
    void appendNode(double);
    void insertNode(double);
    void deleteNode(double);
    void displayList() const;
   
};
#endif
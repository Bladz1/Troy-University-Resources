**Which structure allows easy insertion of elements between nodes during runtime?**  

- Stack  
- Array  
- Queue  
- Linked list  

---

**Which data structure operates in a FIFO manner?**  

- Linked list  
- Queue  
- Stack  
- Array  

---

**Which C++ feature allows a derived class to redefine a base class function?**  

- Redefinition  
- Overloading  
- Virtualization  
- Encapsulation  

---

**Which function adds a node at the end of a list?**  

- appendNode  
- addEnd  
- addBack  
- insertNode  

---

**Which function is called when using `delete` on a class pointer?**  

- Destructor  
- Remove  
- Deallocator  
- Constructor  

---

**Which class function is called when an object is deleted?**  

- Constructor  
- Mutator  
- Accessor  
- Destructor  

---

**What is true about base class constructors in inheritance?**  

- They are called after derived  
- They are optional  
- They are called before derived class constructors  
- They are virtual  

---

**Which structure uses the head to refer to its first node?**  

- Linked list  
- Stack  
- Queue  
- Array  

---

**What data structure uses dynamic memory and grows/shrinks as needed?**  

- Array  
- Stack (array)  
- Queue (array)  
- Linked list  

---

**What does a destructor do?**  

- Creates an object  
- Releases resources when an object is destroyed  
- Overloads operators  
- Modifies member variables  

---

**Which class diagram notation is used to indicate private members in UML?**  

- `-`  
- `~`  
- `+`
- `#`

---

**Which class feature hides internal data from external access?**  

- Inheritance  
- Overloading  
- Data hiding  
- Function overriding  

---

**Which structure allows both front and rear insertions and deletions?**  

- deque  
- list  
- stack  
- vector  

---

**Which keyword makes a class function callable on polymorphic objects?**  

- `virtual`  
- `override`  
- `friend`  
- `static`  

---

**Which C++ operator can be overloaded to simulate array behavior?**  

- `&`
- `()`
- `[]`
- `*`

---

**Which keyword is used to ensure a member function is shared among all objects?**  

- `virtual`  
- `static`  
- `public`  
- `const`  

---

**In a class, what are public functions typically called?**  

- Nodes  
- Data  
- Attributes  
- Interface  

---

**Which function is used to create a new object of a class?**  

- Builder  
- Instantiator  
- Creator  
- Constructor  

---

**What function is automatically called when an object goes out of scope?**  

- Destructor  
- Mutator  
- Constructor  
- Accessor  

---

**Which C++ structure represents a LIFO structure?**  

- Queue  
- Array  
- Linked list  
- Stack  

---

**Which object relationship is modeled by aggregation?**  

- Is-a  
- Can-do  
- Includes  
- Has-a  

---

**What keyword declares a function that can be redefined in a derived class?**  

- override  
- virtual  
- abstract  
- protected  

---

**Which C++ feature lets you define multiple functions with the same name but different parameters?**  

- Virtualization  
- Encapsulation  
- Overriding  
- Overloading  

---

**How do you declare a static member variable?**  

- Using private:  
- Using inline  
- Using const  
- Using static keyword  

---

**Which keyword allows a class to inherit from another class?**  

- static  
- public  
- const  
- friend  

---

**What is the term for a function that must be overridden in a derived class?**  

- Inline function  
- Base function  
- Redefined function  
- Pure virtual function  

---

**Linked List class implementation**  
Implement a `LinkedList` class with the node data as a `double` with these basic functions:

- `appendNode(double val)`: add a new node to the end of the list with data is `val`
- `deleteNode(double val)`: delete one node with data equals to `val`
- `findNode(double val)`: find one node with data equals to `val`
- `destroy()`: remove all nodes and point the node head to `NULL`

> Only class implementation is required.

---

**Online Media Library**

**Requirements:**

Create a pure abstract base class `Media`:  

- Attributes: `string title`, `int year`  
- Pure virtual method: `void printDetails() const = 0`  
- Virtual destructor  
- Static variable: `int mediaCount`

Create two derived classes:  

- `Book`: has `string author`  
- `Movie`: has `int duration`

**Implement:**  

- Constructors, destructors (update `mediaCount`)  
- Getter/setter for each subclass's attribute  
- Override `printDetails()` in each to print all attributes' values to the screen  

**In `main()`:**  

- Create an array of `Media*` with mixed `Book` and `Movie` objects  
- Print all media info  
- Print total number of media items using `mediaCount`

# Midterm

### **Question 1** (2 pts)

There must be only one function involved in any recursive solution.
- [ ] True
- [ ] False

---

### **Question 2** (2 pts)

A base case is not necessary for all recursive algorithms.
- [ ] True
- [ ] False

---

### **Question 3** (2 pts)

A recursive function must have some way to control the number of times it repeats.
- [ ] True
- [ ] False

---

### **Question 4** (2 pts)

Recursive algorithms are always more concise and efficient than iterative algorithms.
- [ ] True
- [ ] False

---

### **Question 5** (2 pts)

Each time a function is called in a recursive solution, the system incurs overhead that is not incurred with a loop.
- [ ] True
- [ ] False

---

### **Question 6** (2 pts)

All instances of a class share the same values of the data attributes in the class.
- [ ] True
- [ ] False

---

### **Question 7** (2 pts)

Procedures operate on data items that are separate from the procedures.
- [ ] True
- [ ] False

---

### **Question 8** (2 pts)

A class can be thought of as a blueprint that can be used to create an object.
- [ ] True
- [ ] False

---

### **Question 9** (2 pts)

When a class inherits another class, it is required to use all the data attributes and methods of the superclass.
- [ ] True
- [ ] False

---

### **Question 10** (2 pts)

Object-oriented programming allows us to hide the object's data attributes from code that is outside the object.
- [ ] True
- [ ] False

---

### **Question 11** (2 pts)

The elements in a dictionary are stored in ascending order, by the keys of the key-value pairs.
- [ ] True
- [ ] False

---

### **Question 12** (2 pts)

A dictionary can include the same value several times but cannot include the same key several times.
- [ ] True
- [ ] False

---

### **Question 13** (2 pts)

Sets are created using curly braces { }.
- [ ] True
- [ ] False

---

### **Question 14** (2 pts)

In slicing, if the end index specifies a position beyond the end of the list, Python will use the length of the list instead.
- [ ] True
- [ ] False

---

### **Question 15** (2 pts)

The following code will display `yes + no`:

```python
mystr = 'yes'
yourstr = 'no'
mystr += yourstr
print(mystr)
```

- [ ] True
- [ ] False

---

### **Question 16** (2 pts)

A function definition specifies what a function does and causes the function to execute.
- [ ] True
- [ ] False

---

### **Question 17** (2 pts)

The function header marks the beginning of the function definition.
- [ ] True
- [ ] False

---

### **Question 18** (2 pts)

Python function names follow the same rules as those for naming variables.
- [ ] True
- [ ] False

---

### **Question 19** (2 pts)

A value-returning function is like a simple function except that when it finishes it returns a value back to the part of the program that called it.
- [ ] True
- [ ] False

---

### **Question 20** (2 pts)

A local variable can be accessed from anywhere in the program.
- [ ] True
- [ ] False

---

### **Question 21** (3 pts)

What will be assigned to the variable `s_string` after the following code executes?

```python
special = '1357 Country Ln.'
s_string = special[ :4]
```

- [ ] `7`
- [ ] `1357`
- [ ] 5
- [ ] `7 Country Ln.`

---

### **Question 22** (3 pts)

What will be the value of the variable `list2` after the following code executes?

```python
list1 = [1, 2, 3]
list2 = []
for element in list1:
    list2.append(element)
list1 = [4, 5, 6]
```

- [ ] [1, 2, 3]
- [ ] [4, 5, 6]
- [ ] [1, 2, 3, 4, 5, 6]
- [ ] Nothing; this code is invalid

---

### **Question 23** (3 pts)

What will be the value of the variable `list` after the following code executes?

```python
list = [1, 2]
list = list * 3
```

- [ ] [1, 2] * 3
- [ ] [3, 6]
- [ ] [1, 2, 1, 2, 1, 2]
- [ ] [1, 2], [1, 2], [1, 2]

---

### **Question 24** (3 pts)

What is the correct structure to create a dictionary of months where each month will be accessed by its month number (for example, January is month 1, April is month 4)?
- [ ] `{ 1 ; 'January', 2 ; 'February', ... 12 ; 'December'}`
- [ ] `{ 1 : 'January', 2 : 'February', ... 12 : 'December' }`
- [ ] `[ '1' : 'January', '2' : 'February', ... '12' : 'December' ]`
- [ ] `{ 1, 2,... 12 : 'January', 'February',... 'December' }`

---

### **Question 25** (3 pts)

A(n) __________ is any piece of data that is passed into a function when the function is called.
- [ ] global variable
- [ ] argument
- [ ] local variable
- [ ] parameter

---

### **Question 26** (3 pts)

What will the following code display?

```python
def show_values(a=0, b=1, c=2, d=3):
    print(a, b, c, d)

show_values(c=99)
```

- [ ] 0 1 3 99
- [ ] 0 1 99 3
- [ ] 0 1 2 99 3
- [ ] 99

---

### **Question 27** (3 pts)

What number will be displayed after the following code is executed?

```python
def main():
    print("The answer is", magic(5))

def magic(num):
    answer = num + 2 * 10
    return answer

if __name__ == '__main__':
    main()
```

- [ ] 70
- [ ] 25
- [ ] 100
- [ ] The statement will cause a syntax error.

---

### **Question 28** (3 pts)

A set of statements that belong together as a group and contribute to the function definition is known as a
- [ ] header
- [ ] block
- [ ] return
- [ ] parameter

---

### **Question 29** (3 pts)

What will the following code display?

```python
def show_values(a, b, *, c, d):
    e = 99
    print(a, b, c, d, e)

show_values(1, 2, d=30, c=40)
```

- [ ] 1 2 30 40 99
- [ ] 1 2 30 40
- [ ] 1 2 40 30 99
- [ ] 1 2 40 30

---

### **Question 30** (3 pts)

What will be the output after the following code is executed?

```python
def pass_it(x, y):
    z = x + ", " + y
    return(z)

name2 = "Julian"
name1 = "Smith"
fullname = pass_it(name1, name2)
print(fullname)
```

- [ ] Julian Smith
- [ ] Smith Julian
- [ ] Julian, Smith
- [ ] Smith, Julian

---

### **Question 31** (3 pts)

In a recursive solution, if the problem cannot be solved now, then a recursive function reduces it to a smaller but similar problem and
- [ ] exits
- [ ] returns to the main function
- [ ] returns to the calling function
- [ ] calls itself to solve the smaller problem

---

### **Question 32** (3 pts)

A problem can be solved with recursion if it can be broken down into __________ problems.
- [ ] smaller
- [ ] one-line
- [ ] manageable
- [ ] modular

---

### **Question 33** (3 pts)

The base case is the case in which the problem can be solved without
- [ ] loops
- [ ] decisions
- [ ] objects
- [ ] recursion

---

### **Question 34** (3 pts)

Which would be the base case in a recursive solution to the problem of finding the factorial of a number. Recall that the factorial of a non-negative whole number is defined as n! where:
If n = 0, then n! = 1
If n > 0, then n! = 1 x 2 x 3 x ... x n
- [ ] n = 0
- [ ] n = 1
- [ ] n > 0
- [ ] The factorial of a number cannot be solved with recursion.

---

### **Question 35** (3 pts)

What is the relationship called in which one object is a specialized version of another object?
- [ ] parent-child
- [ ] node-to-node
- [ ] is a
- [ ] class-subclass

---

### **Question 36** (3 pts)

__________ allows a new class to inherit members of the class it extends.
- [ ] Encapsulation
- [ ] Attributes
- [ ] Methods
- [ ] Inheritance

---

### **Question 37** (6 pts)

Please convert the following IEEE754 representation to decimal (base 10) number (in double precision).

0 10000000010 11000000000.....000

2^5 = 32
2^6 = 64
2^7 = 128
2^8 = 256
2^9 = 512
2^10 = 1024
2^11 = 2048

*(Essay / Open Answer)*

---

### **Question 38** (6 pts)

Please convert the following floating point number to IEEE754 representation (in double precision).

-7

*(Essay / Open Answer)*

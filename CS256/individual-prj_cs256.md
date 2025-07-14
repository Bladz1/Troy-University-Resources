Có lẽ **Individual programming projects** là nơi mà các anh chị em bỏ mạng nhiều nhất, có ba bài như này, mỗi bài hệ số 10%, bài 1 thì đương nhiên dễ kinh 😊. Làm xong sướng, sang bài 2 và 3 anh Văn sát phạt kinh hoàng, đứa nào yếu tâm lí có khi còn khóc, đêm không ngủ được... :)))

---

- Thi máy nên cũng khó tuồn full đề cả ba bài nhưng mà tôi sẽ *xây dựng theo trí nhớ* bài cuối cùng - bài thứ 3, chắc nhiều người sẽ đồng ý đây là bài khó nhất... 
  
  ## Đề bài thứ 3 như sau:
  
  ### **Objective**
  
  Design and implement a simple file system simulation using C++ that models files and directories with the following functionalities:
  
  - Polymorphic behavior via abstract base classes
  
  - Recursive printing of directory structure
  
  - Size aggregation across files and directories
  
  - Path resolution for entities
  
  - Searching for files/directories by name
  
  ---
  
  ### **Problem Description**
  
  You are tasked with designing a mini file system simulation that can represent both **files** and **directories**. Each entity will be derived from a common abstract base class called `FileSystemEntity`.
  
  This program must support:
  
  - **Displaying** the file structure hierarchically with indentation
  
  - **Calculating** total size of any directory recursively
  
  - **Searching** for any file or directory by name
  
  - **Retrieving the full path** from the root to any found item
  
  ---
  
  ### **Requirements**
  
  #### 1. Abstract Class: `FileSystemEntity`
  
  - Member:
    
    - `string Name`
  
  - Pure virtual methods:
    
    - `void Print(int indent)`
    
    - `int GetSize()`
    
    - `FileSystemEntity* Contains(string name)`
    
    - `string GetPath()`
  
  ---
  
  #### 2. Derived Class: `File`
  
  - Inherits from `FileSystemEntity`
  
  - Additional member:
    
    - `int Size`
  
  - Implements:
    
    - `Print`: Outputs the file name and size with indentation.
    
    - `GetSize`: Returns the file size.
    
    - `Contains`: Returns pointer if name matches; otherwise, `nullptr`.
    
    - `GetPath`: Returns file name (assume relative to current directory).
  
  ---
  
  #### 3. Derived Class: `Directory`
  
  - Inherits from `FileSystemEntity`
  
  - Members:
    
    - An array of pointers to `FileSystemEntity` (fixed capacity, e.g. 10)
    
    - `int ChildCount`
    
    - `Directory* Parent` (to allow path tracing)
  
  - Implements:
    
    - `AddChild(FileSystemEntity* entity)`: Adds a new child entity.
    
    - `Print`: Recursively prints the directory and its contents.
    
    - `GetSize`: Returns total size by summing sizes of all child entities.
    
    - `Contains`: Recursively searches for an entity by name.
    
    - `GetPath`: Builds the full path from root by traversing `Parent` pointers.
  
  ---
  
  ### **Implementation Constraints**
  
  - Use **dynamic memory** to manage file and directory objects.
  
  - Use **polymorphism** for behavior such as `Print`, `GetSize`, `Contains`.
  
  - Use **recursion** where appropriate (e.g., printing or searching).
  
  - Limit each directory to a maximum of 10 child entities.
  
  - Ensure memory is properly released using destructors.
  
  ---
  
  ### **Sample Output**
  
  Given the following structure:
  
  ```
  root/
    |- dir1/
        |- dir2/
            |- file3.txt
        |- file2.txt
    |- file1.txt
  ```
  
  Expected output:
  
  ```
  - root (directory)
    - dir1 (directory)
      - dir2 (directory)
        - file3.txt (file, size=30)
      - file2.txt (file, size=20)
    - file1.txt (file, size=10)
  Total size: 60
  Found: file3.txt
  Path: root/dir1/dir2/file3.txt
  Not found
  ```
  
  ---
  
  ### **Deliverables**
  
  1. `FileSystemEntity.h` – base class definition
  
  2. `File.h/.cpp` – file class implementation
  
  3. `Directory.h/.cpp` – directory class implementation
  
  4. `main.cpp` – test the simulation with the structure described above
  
  ---
  
  ### **Evaluation Criteria**
  
  - Correct use of object-oriented programming (inheritance, virtual functions)
  
  - Code readability and proper formatting
  
  - Proper memory management (no leaks)
  
  - Output matches the expected structure and values
  
  - Clean and modular code organization (separate headers and implementation)



Có lẽ **Individual programming projects** là nơi mà các anh chị em bỏ mạng nhiều nhất, có ba bài như này, mỗi bài hệ số 10%, bài 1 thì đương nhiên dễ kinh 😊. Làm xong sướng, sang bài 2 và 3 anh Văn sát phạt kinh hoàng, đứa nào yếu tâm lí có khi còn khóc, đêm không ngủ được... :)))

---

- Thi máy nên cũng khó tuồn full đề cả ba bài nhưng mà tôi sẽ *xây dựng theo trí nhớ + bổ sung bởi ChatGPT* bài thứ 2 và bài cuối cùng - bài thứ 3 (chắc nhiều người sẽ đồng ý đây là bài khó nhất) ... 
  
  ---
  
  ## Đề bài thứ 2 như sau:
  
  ### **Objective:**
  
  Design and implement a simple battle simulation in C++ between two opposing teams: **FireTeam** and **DefTeam**, where each team consists of 10 tanks. The tanks can attack each other with varying damage values depending on their type, and the game proceeds for 10 turns. At the end, the team with more surviving tanks wins.
  
  ---
  
  ### **Requirements:**
  
  #### **1. Class Design:**
  
  You are required to implement the following classes:
  
  #### 🔹 `Tank` (Base class)
  
  - Attributes:
    
    - `int Hp` – health points (initialized to 100).
    
    - `bool IsAlive` – indicates if the tank is still alive.
  
  - Methods:
    
    - Constructor initializes default values.
    
    - `virtual void Attack(Tank& target)` – randomly deals **0–19** damage to the target tank.
  
  #### 🔹 `FireTank` (Derived from `Tank`)
  
  - Overrides `Attack(Tank& target)` to deal **0–29** damage.
  
  #### 🔹 `DefTank` (Derived from `Tank`)
  
  - Overrides `Attack(Tank& target)` to deal **0–9** damage.
  
  #### 🔹 `Team`
  
  - Attributes:
    
    - `Tank* Members[10]` – an array of pointers to `Tank` objects.
    
    - `int AliveCount` – the number of tanks still alive in the team.
  
  - Methods:
    
    - Constructor takes a boolean `isFireTeam` to determine the tank type.
    
    - Destructor frees memory.
    
    - `void UpdateAliveCount()` – counts tanks that are still alive.
  
  ---
  
  ### **2. Game Logic:**
  
  Implement the game logic inside the `main()` function as follows:
  
  - Initialize random seed.
  
  - Create a `FireTeam` and a `DefTeam`, each with 10 tanks.
  
  - Run a loop for **10 turns**:
    
    - In each turn:
      
      - The **FireTeam** attacks first:
        
        - Each alive tank randomly chooses a target from the DefTeam (also must be alive).
      
      - Then the **DefTeam** attacks with the same rule.
      
      - After each attack phase, update the opposing team's alive count, then print the HP of all tanks in both teams.
  
  - After 10 turns:
    
    - Print the number of surviving tanks on each side.
    
    - Declare the winner or a tie.
  
  ---
  
  ### **3. Technical Constraints:**
  
  - Use dynamic memory allocation (`new`/`delete`) for tank objects.
  
  - Use proper use of polymorphism (virtual functions for attack).
  
  - Include appropriate header guards.
  
  - Use `srand()` and `rand()` for randomness.
  
  - Follow clean coding practices (indents, naming, structure).
  
  ---
  
  ### **Sample Output (example):**
  
  ```
  Turn 1
  FireTeam HP: 100 84 73 ... 
  DefTeam HP: 100 90 50 ...
  ...
  FireTeam Alive: 6
  DefTeam Alive: 4
  FireTeam Wins!
  ```
  
  ---
  
  ### **Deliverables:**
  
  - `Tank.h` – header file with all class declarations.
  
  - `main.cpp` – main program with the simulation logic.
  
  - Any additional `.cpp` files if you split implementation per class (optional).
  
  ---
  
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
  
  - **Retrieving the path** of an entity
  
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
    
    - `GetPath`: Returns file name.
  
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
        |- file2.txt
        |- dir2/
            |- file3.txt
    |- file1.txt
  ```
  
  Expected output:
  
  ```
  - root (directory)
    - dir1 (directory)
      - file2.txt (file, size=20)
      - dir2 (directory)
        - file3.txt (file, size=30)
    - file1.txt (file, size=10)
  Total size: 60
  Found: file3.txt
  Path: file3.txt
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



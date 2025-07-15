A duel game is a fighting game between two characters. All character should have at least 3 properties such as: attack power, attack speed and health. There are 3 types of characters:
- An attack character is the one with an extremely high attack power, normal health and low attack speed (i.e. attack power > health > attack speed)
- An agility character is the one with an extremely high attack speed, normal attack power and low health. 
- A defensive character is the one with an extremely high health, normal attack speed and low attack power.

Depending on the attack speed, each turn, each character can attack one or more times. 

Write an OOP solution for these characters, inheritance must be used.

Write a main class to demonstrate the duel game with two game mode:
- Duel mode: Two random characters will be selected for a fight. In a loop, for each iteration, a character will take turn to attack the other. Create a mechanism for fighting and declare the winner or a draw.  
- Mixed mode: Multiple random characters will be selected for a fight. In a loop, for eac iteration, a character will take turn to attack another character. One character should not be attacked twice in the same iteration. Declare the winner. 
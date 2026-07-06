
* Programming challenges: 19 - 27
* Additional exercises:
    1.  Write a program that asks users to input a date (day, month, year) and shows the next day after the input date.
    2.  Write a program to input a date (day, month, year) and calculate which day of the year that date is.
    3.  Write a program that asks the user to enter a two-digit integer and outputs the number in Vietnamese words.

**19. Spectral Analysis**  
If a scientist knows the wavelength of an electromagnetic wave, he or she can determine what type of radiation it is. Write a program that asks for the wavelength of an electromagnetic wave in meters and then displays what that wave is according to the chart below. (For example, a wave with a wavelength of 1E-10 meters would be an X-ray.)

| Spectrum Type | Wavelength Boundary (m) |
| :--- | :---: |
| **Radio Waves** | > 1 × 10⁻² |
| **Microwaves** | 1 × 10⁻² |
| **Infrared** | 1 × 10⁻³ |
| **Visible Light** | 7 × 10⁻⁷ |
| **Ultraviolet** | 4 × 10⁻⁷ |
| **X Rays** | 1 × 10⁻⁸ |
| **Gamma Rays** | < 1 × 10⁻¹¹ |

**20. The Speed of Sound**  
The following table shows the approximate speed of sound in air, water, and steel.

| Medium | Speed |
| :--- | :--- |
| Air | 1,100 feet per second |
| Water | 4,900 feet per second |
| Steel | 16,400 feet per second |

Write a program that displays a menu allowing the user to select air, water, or steel. After the user has made a selection, he or she should be asked to enter the distance a sound wave will travel in the selected medium. The program will then display the amount of time it will take. (Round the answer to four decimal places.)  
*Input Validation: Check that the user has selected one of the available choices from the menu. Do not accept distances less than 0.*

**21. The Speed of Sound in Gases**  
When sound travels through a gas, its speed depends primarily on the density of the medium. The less dense the medium, the faster the speed will be. The following table shows the approximate speed of sound at 0 degrees centigrade, measured in meters per second, when traveling through carbon dioxide, air, helium, and hydrogen.

| Medium | Speed (Meters per Second) |
| :--- | :--- |
| Carbon Dioxide | 258.0 |
| Air | 331.5 |
| Helium | 972.0 |
| Hydrogen | 1,270.0 |

Write a program that displays a menu allowing the user to select one of these four gases. After a selection has been made, the user should enter the number of seconds it took for the sound to travel in this medium from its source to the location at which it was detected. The program should then report how far away (in meters) the source of the sound was from the detection location.  
*Input Validation: Check that the user has selected one of the available choices from the menu. Do not accept times less than 0 seconds or more than 30 seconds.*

**22. Freezing and Boiling Points**  
The following table lists the freezing and boiling points of several substances. Write a program that asks the user to enter a temperature and then shows all the substances that will freeze at that temperature and all that will boil at that temperature. For example, if the user enters –20 the program should report that water will freeze and oxygen will boil at that temperature.

| Substance | Freezing Point (°F) | Boiling Point (°F) |
| :--- | :--- | :--- |
| Ethyl alcohol | –173 | 172 |
| Mercury | –38 | 676 |
| Oxygen | –362 | –306 |
| Water | 32 | 212 |

**23. Geometry Calculator**  
Write a program that displays the following menu:

```text
Geometry Calculator
    1. Calculate the Area of a Circle
    2. Calculate the Area of a Rectangle
    3. Calculate the Area of a Triangle
    4. Quit
    Enter your choice (1-4):
```

If the user enters 1, the program should ask for the radius of the circle and then display its area. Use the following formula:  
$area = \pi r^2$  
Use 3.14159 for $\pi$ and the radius of the circle for $r$. If the user enters 2, the program should ask for the length and width of the rectangle and then display the rectangle’s area. Use the following formula:  
`area = length * width`  
If the user enters 3 the program should ask for the length of the triangle’s base and its height, and then display its area. Use the following formula:  
`area = base * height * .5`  
If the user enters 4, the program should end.  
*Input Validation: Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu. Do not accept negative values for the circle’s radius, the rectangle’s length or width, or the triangle’s base or height.*

**24. Long-Distance Calls**  
A long-distance carrier charges the following rates for telephone calls:

| Starting Time of Call | Rate per Minute |
| :--- | :--- |
| 00:00–06:59 | 0.05 |
| 07:00–19:00 | 0.45 |
| 19:01–23:59 | 0.20 |

Write a program that asks for the starting time and the number of minutes of the call, and displays the charges. The program should ask for the time to be entered as a floating-point number in the form HH.MM. For example, 07:00 hours will be entered as 07.00, and 16:28 hours will be entered as 16.28.  
*Input Validation: The program should not accept times that are greater than 23:59. Also, no number whose last two digits are greater than 59 should be accepted. Hint: Assuming num is a floating-point variable, the following expression will give you its fractional part:*  
`num - static_cast<int>(num)`

**25. Mobile Service Provider**  
A mobile phone service provider has three different subscription packages for its customers:

**Package A:** For \$39.99 per month 450 minutes are provided. Additional minutes are \$0.45 per minute.  
**Package B:** For \$59.99 per month 900 minutes are provided. Additional minutes are \$0.40 per minute.  
**Package C:** For \$69.99 per month unlimited minutes provided.

Write a program that calculates a customer’s monthly bill. It should ask which package the customer has purchased and how many minutes were used. It should then display the total amount due.  
*Input Validation: Be sure the user only selects package A, B, or C.*

**26. Mobile Service Provider, Part 2**  
Modify the Program in Programming Challenge 25 so that it also displays how much money Package A customers would save if they purchased packages B or C, and how much money Package B customers would save if they purchased Package C. If there would be no savings, no message should be printed.

**27. Mobile Service Provider, Part 3**  
Months with 30 days have 720 hours, and months with 31 days have 744 hours. February, with 28 days, has 672 hours. You can calculate the number of minutes in a month by multiplying its number of hours by 60. Enhance the input validation of the Mobile Service Provider program by asking the user for the month (by name), and validating that the number of minutes entered is not more than the maximum for the entire month. Here is a table of the months, their days, and number of hours in each.

| Month | Days | Hours |
| :--- | :--- | :--- |
| January | 31 | 744 |
| February | 28 | 672 |
| March | 31 | 744 |
| April | 30 | 720 |
| May | 31 | 744 |
| June | 30 | 720 |
| July | 31 | 744 |
| August | 31 | 744 |
| September | 30 | 720 |
| October | 31 | 744 |
| November | 30 | 720 |
| December | 31 | 744 |

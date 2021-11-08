Danielle DiTomasso
Lab 6 README

For this lab, I first started off by studying the code that was provided to us in php, and fully 
understanding how exaclty it works. Once I felt as though I had a grasp on what was being given to us,
I then went to implementing the divide, multiply, and sumbrations operation classes. Following the 
guidelines of the code we were provided, I had gotten my first functions working with minimal, smaller 
errors such as forgetting a semi-colon, or misspelling a variable name. After I was sure I had
everything working correctly, inlcuding the classes, buttons, and other necessary POST statements,
I then moved onto implementing the slightly more complicated operations.

For operations such as Log10(x), Sin(x), Cos(x), e^x, Tan(x), they all have one thing in common: They
all use only the 'x' number, and do not use the 'y' number (or in my calculatar, I changed the variable
to 'n'). In order to account for this, I created a simple if - else statement, which states if the user
enters a value for 'n', to return a error statement. Else (aka only a 'x' number is input), it 
will return the equation and the numerical value. I implemented this for all the operations that 
used only the 'x' number, to ensure functionality of the program. Additnally, I had to change the 
'non-numeric input' error check upon making this change. This is becuase if the user is not inputing 
a 'n' number in order for the function to work, than that error would always appear, making the 
calculator non-functioning. In order to account for this, I simply deleted the check of 
entering a value for the 'n' number in order to resolve this issue. 


For the CSS of this program, I created a static background that fills the page, and used conatiners 
in order to make the buttons line up, and for the input and output boxes to also align. I also improved 
the buttons and added a hover effect over them, in order to improve overall user expirence. 

CREATIVITY: 
For the creativity part of this lab, I implemented two additonal operations besides the ones that 
were required in the directions. These include "x*pi", and "Randians to Degrees" converter. In order 
to do these, I had to research the built-in php functions and constants. I then repeated the process 
for all the other operations, and ensured everything worked correctly.


Resources:
https://www.educba.com/square-root-in-php/
https://www.w3schools.com/php/func_math_pow.asp
https://www.php.net/manual/en/math.constants.php
https://www.w3schools.com/php/func_math_log.asp
https://www.w3schools.com/php/func_math_log10.asp
https://www.w3schools.com/php/func_math_sin.asp
https://www.w3schools.com/php/func_math_cos.asp
https://www.w3schools.com/php/func_math_tan.asp
https://www.w3schools.com/tags/tag_button.asp
https://www.w3schools.com/css/css_grid_container.asp
https://www.w3schools.com/php/php_ref_math.asp
https://howtotypeanything.com/power-of-symbol/
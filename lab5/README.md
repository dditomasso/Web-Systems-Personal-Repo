Free Bee web client
===================
This is the JavaScript-based web client for Free Bee.

What is Free Bee?
-----------------
Free Bee is an enhanced Free Software clone of The New York Times game
Spelling Bee.

In this game, your goal is to find as many words as you can with the seven
letters you are given. You don't have to use any letter except the middle
letter and letters can be used more than once in a word. Finding a word
that uses all seven letters yields bonus points! Every game has at least
one such word, and many games have multiple.

Earning enough points to reach the rank of Queen Bee wins the game!

You can play the daily challenge like the original game or try your hand at a
nearly infinite number of computer-generated random challenges. Unlike the
original game, you are not restricted to only a single game per day!

The only notable difference between Free Bee and the original game is the use
 of the ENABLE dictionary instead of the NYT dictionary. Patches welcome.

Find us on the web at https://freebee.fun/

License
-------
ISC License. See LICENSE for details.

=============
Danielle DiTomasso
Lab 5 README 

Optimization One: EDIT HTML / ADDING CSS & JS PAGES
For my first optmization, I decided to move the CSS and the JavaScript code to 
each their own individual files, and then link them back to the index.html page.
This allowed for the code to not only be mre organized and therefore easier to 
read and distinguish, but also imporved loading time of the game itself.

Optimization Two: SETTING JS "DOCUEMENT" CALL TO A VARIABLE 
Within the JavaScript code, there are multipule lines of code in which the 
docuement.getElementById() function is called with the same variable name inside 
the "()". In order to optomize the code, I set the function call to a variable
and then just used the variable everytime the call was used. I used this if it was 
called more than three times within any given function, which ended up being true
for the "untype", "display", and "wondow.onload" functions. 

Optimization Three: COMBINING SIMILAR / IDENTICAL CSS RULES
Within the CSS file, the "restart" classes, "message" classes, and the "game" classes 
all have extremely similar, if not the same CSS properities. Therefore, I combinded them
into one class which increases optimization by eliminating unnecessary properities
that would add onto loading time. 

Optimization Four: SETTING JS FUNCTION CALL TO A VARIABLE 
Within the JavaScript code, there are multipule lines of code within the "display" function 
in which the "untype()" function is called. In order to optomize the code, I set the 
function call to a variable and then just used the variable everytime the call was used. 
I used this methiod if any function was called more than three times within any other given 
function.

Optimization Five: EFFICIENT MARKUP 
In order to have efficient code markup, I first started out by putting the link to the
external CSS file at the top of the HTML page, and the JavaScript link was added
at the very bottom of the page. Additionally, I ensured that there were no empty 
src/href properities within the HTML docuement, where they were needed.

Optimization Six: ENABLING GZIP COMPRESSION
One way to ensure faster loading time on any given website is to enable GZip 
compression. In order to do this, I first did some research on what exactly GZip
compression was, and how exactly to enable it (resource links included below).
I then created an .htaccess file within this folder (which is subsaquently within
the xampp and htdocs folders) as a text file. From there, I then used the 
"mod_deflate.c" call, and provided text (which delfates HTML, CSS, JavaScript,
and many other pages) in order to reduce loading time. 

Optimization Seven: MINIFICATION OF CSS AND JAVASCRIPT 
Using the website "https://htmlcompressor.com/compressor/", I minified 
both the CSS and JS files after every other part of the lab was complete.

CREATIVITY: 
For the creativity aspect of this lab, I decided to try and improve the dark
mode of the game. The orginal dark mode design made the screen extremely 
difficult to see any text or images. Using CSS, I changed properities 
such as font color, font size, backround color, and more in order to 
make the screen look more visually appealing and to increase user ease 
of access. 
(NOTE: Despite my best efforts, I could not the appearence of the page
to match the chnages I had made within the CSS file. However I left the 
chnages within the code.)

Resources:
https://www.w3schools.com/Css/tryit.asp?filename=trycss_navbar_horizontal_black_active
https://www.tutorialspoint.com/How-to-use-external-js-files-in-an-HTML-file#:~:text=Create%20external%20JavaScript%20file%20with%20the%20extension.js.%20After,web%20page%20to%20increase%20performance%20of%20the%20page.
https://blog.hubspot.com/website/gzip-compression
https://stackoverflow.com/questions/21372339/where-to-find-htaccess-file-in-my-xampp-localhost
https://htmlcompressor.com/compressor/
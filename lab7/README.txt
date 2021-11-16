Danielle DiTomasso
README Lab 7


Part 1:
For this part of the lab, I created all of the nesseciary requirements are completed through 
phpmyadmin only. Meaning, that I did not use any command line arguements to complete the beginning 
setup of the database. 

To create the database I first hit the "New" button on the index page of the 
localhost of phpmyadmin, and named the new database websyslab7. From there, I created a new table 
by going into the database, and under the "Create table" Tab, entering the name of "courses" and
setting the number of columns to 4, and then hit "Go." From here, I was then brought to another 
screen in which I could create and edit each individual column of the table. Firstly, I created the 
"crn" colum by typing "crn" in under the name catagorey, left the type value as "INT", entered 11 
under the "Length/Values" section, and checked the box off under the "A_I" section to indicate 
auto-incriment. Next, I created the "prefix" column by typing "prefix" in under the name catagorey,
changed the "INT" value to "VARCHAR" under the "Type," and entered 4 under the "Length/Values" section.
For the "number" column, I typed in "number" in under the name catagorey, chanaged the "INT" value to 
"SMALLINT" under the "Type," and entered 4 under the "Length/Values" section. And Lastly, I created the 
"title" column by typing in "title" under the name catagorey, chanaged the "INT" value to 
"VARCHAR" under the "Type," and entered 255 under the "Length/Values" section. Additonally, I ensured 
that the charset/collate was set to utf8_mb4_general_ci before clicking save, and creating this table. 
For the next table called "students", I followed the exact same process again as described in detail 
above, changing my input values to what was specidfied in the lab. 


Part 2:
Each number is for each numbered task shown within the lab directions. 

1. To add the address fields (street, city, state, zip) to the students table, You first click 
on the students table in phpmyadmin, and then click on the "Structure" tab. I then scrolled down 
past the table to where it says "Add" - a certian number of columns after a certian location within 
the table. For this, I put in to add 4 colums after the "phone" column, which is the last column 
on the table. I then set the street, city, and state columns to VARCHAR type with the Value/Length
of 50, and the zip to type INT with a Value/Length of 5. 

2. Within phpmyadmin, I went under the existing "courses' table and naviagated to the "Structure"
Tab. Just like last time, I went to the Add columns portion of the screen, however instead of adding
4 like the last task, I now only added 2. For the "section" column, I made the value equal to an INT,
and set the value to 2, due to the fact that a section of a class never exceeds past 99 (hopefully).
For the "year", I also set this equal to an INT value of 4. 

3. For creating the grades table, I set up the "id" column to have be an INT value, be a primary
key by clicking thd drop down option under the "index" option, and checked off the box for auto
incriment under the "A_I" header. For the foregin keys, I simply created their colums first, 
both INT types with values 11 and 9 respectively, and set up the foregin key option after the 
table was created, which I will adress shortly. The last step for creating the table was adding 
the grade column, in which it is set to type INT with the Length/Value set to 3. For creating the 
foregin keys for both the crn and RIN values, I went to the grades table and clicked on the "Structure"
tab. From there I clicked on the button that said "Relation view," and filled out the fileds, in 
which the name of the "constraint properities" is crn, the type is RESTRICT, 
the "child" column is the crn value within the grades table, and the "parent" column is the crn 
value within the "courses" table. This effectivly connects the two values togther, by saying whatever 
the value is wihtin the "courses" table, will be the same for the "grades" table. For the RIN value,
I simply repeated the same steps above, except I linked the "grades" table RIN value to the "students"
table RIN value, which is a primary key (crn value under "courses" table was also a primary key). 

4. To insert items into a table, I first clicked on the table itself, and then navigated to the "Insert"
Tab on the top of the screen. Then, just fill out the desired information. For the courses table, the 
following infromation is an example of one of the 4 courses I added to the table:
	Course 1 Example: 
		crn = 63861
		prefix = ARTS
		number = 1310
		title = Digital Filmmaking
		section = 02
		year = 2022

5. To insert infromation into the students table, I simply navigated to the table inside the lab7 database, 
and repeated the above steps, entering the information required. The following information is an example of 
1 of the 4 students I added to the table:
	Student 1 Example: 
		RIN = 123456789
		RSCID = ditomd
		first = Danielle
		last = DiTomasso
		alias = Dani
		phone = 1234567890
		street = Burdett Ave
		city = Troy
		state = NY
		zip = 12180
		
6. To insert infromation into the grades table, I simply navigated to the table inside the lab7 database, 
and repeated the above steps from the pervious two tasks, entering the information required. An important 
note is that bth the crn and RIN values are drop down boxes, due to the fact that they are foregin keys and 
are connected to the other two tables. The following information is an example of 1 of the 10 grades I 
added to the table.
	Grade 1 Example:
		id = 01
		crn (drop down box) = ARTS - 63861
	 	RIN (drop down box) = alexr - 246813579
		grade = 87

7. For this task, I had to do extensive research on how exaclty ORDER BY commands work wihtin MySQL.
Utilizing the SELECT, FROM, and ORDER BY commands, I attempted to print out the order of the students 
that was specified within the lab. This is my code for this task.
	Code:
	    $sql = "SELECT * FROM `students` ORDER BY RIN, last name, RSCID, first name;";
        $pstmt = $dbconn->prepare($sql);
        $s1 = $pstmt -> fetchAll();
        print_r($s1);

8. For this task, my thought process was to first check to see if the grade was above 90. If it was,
I then saved the resulting RIN number to a variable called "$RIN." From there, I then made a SELECT 
statemnt from the students table in which I select all of the rquired students infromation from that 
row, but only if the students RIN number is equal to the RIN number saved in the variable. 
	Code:
		$stmt = $dbconn->query("SELECT * FROM grades WHERE grade > 90");
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 3);
        $RIN = $result[2];

        $sql = "SELECT RIN, firstname, lastname, street, city, state, zip FROM students WHERE RIN = $RIN";
        $pstmt = $dbconn->prepare($sql);
        $s2 = $pstmt -> fetchAll();
        print_r($s2);

9. For this task, my thought process was to first create a variable to add the test scores togther.
After this, I use the last id number, which signifies the numbe of grade scores in total. Then, I 
take the total of the test scores, and divide by the last id number, which then gives the average 
test score. I also used a for loop to go through all of the test scores within the grades array.
	Code:
		$result = 0;
		$stmt = $dbconn->query("SELECT * FROM grades");
		for ($i = 0; $i < stmt[0][-1]; $i++){
			$stmt2 = $dbconn->query("SELECT grade FROM grades");
        	$result += stmt2;
		}
		print_r(result);

10. For this last task, I was confused on exaclty how to find the total of number of students per
course, so I just returned the number of studetns regristred under the students table. To do this, 
I used a for loop to go thorugh each student within the array, and added to a counter variable that 
I created. 
	Code: 
		$total = 0;
		$stmt = $dbconn->query("SELECT * FROM students");
		for ($i = 0; $i < stmt; $i++){
			$result += 1;
		}
		print_r($result);

Part 3: 

For part three of this lab, I wasn't able to comeplete much due to the fact that I spent a large 
majority of my time trying to get tasks 7-10 working in Part 2, and ran out of time. I am confused 
on how to complete many of the tasks within the lab using php to connect to the mySQL database, 
and I definelty plan on attending office hours this week to hopefully gain a better understanding 
of the material for the quiz next week. For some credit, I added basic CSS and attempted to print 
out all three of the tables within the database.


Resources: 
https://treehozz.com/where-is-foreign-key-in-phpmyadmin
https://www.rhumbarlv.com/how-do-i-set-foreign-key-in-phpmyadmin/
https://docs.microsoft.com/en-us/sql/t-sql/queries/select-order-by-clause-transact-sql?view=sql-server-ver15
https://dev.mysql.com/doc/refman/8.0/en/group-by-modifiers.html#:~:text=With%20multiple%20expression%20arguments%2C%20GROUPING%20%28%29%20returns%20a,GROUPING%20%28year%2C%20country%2C%20product%29%20is%20evaluated%20like%20this%3A
https://www.w3schools.com/sql/sql_ref_order_by.asp
http://tizag.com/phpT/forloop.php#:~:text=PHP%20-%20For%20Loop%201%20Set%20a%20counter,the%20end%20of%20each%20iteration%20through%20the%20loop.
https://support.plesk.com/hc/en-us/articles/115000818754-How-to-create-a-database-dump-using-PHPMyAdmin-in-Plesk-#:~:text=%20Answer%20%201%20Go%20to%20Domains%20%3E,the%20%22Add%20DROP%20TABLE%20%2F%20DROP...%20More%20
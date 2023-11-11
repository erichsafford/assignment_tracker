# Assignment Tracker App

This project was completed as part of a learning exercise provided by Dave Gray on YouTube.

I am continuing to learn about PHP and MySQL, and this project was challenging for several reasons.  
Although the framework and styling of the app was provided by the exercise, there were several bugs 
that I needed squashing.  
- In the assignments_db.php file, the query is being constructed conditionally.  I was recieving an
error when trying to bind the course_id variable when it is not being used (in the "else" block).
Moving the prepare($query) and only binding the course_id variable when the course_id is present
fixed the issue.
- Constructing HTML conditionally in the assignment_list.php view was a new concept for me and took
me quite a while to wrap my head around.  My instinct was the close the option tag for each block
(one within the if and one within the else).  Constructing the <option> conditionally, then constructing
the inner text through PHP, and then finally adding the </option> closing tag was interesting to figure
out.
- I spent a good deal of time debugging an issue I was having with the assignment_id not being correctly
tied to the query the delete_assignment function in the assignments_db.php file.  It turned out to be a
case-sensitivity issue but this issue forced me to really follow the logic through each step to trace the
error.  I gained a lot of understanding from this problem.
- Lastly, I had an issue with deleting a course from the database.  The try/catch block within the controller
(index.php) is set up to prevent deleting a course when there are assignment keyed to that course, but I was
getting the error even when the course was empty.  I, again, spent a great deal of time tracing each step
of the logic to see where the disconnect was.  It turned out to be another small error in the MySQL query but,
again, it was a great learning experience walking through everything over and over again.

I learned a great deal about PHP syntax, MVC structure, and MySQL database manipulation through this project.
I'm looking forward to using this knowledge in future projects that I have in mind!

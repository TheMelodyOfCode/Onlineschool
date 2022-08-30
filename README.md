# onlineschool.
PHP & MySQL project to learn and build a fully functional frontend - backend website,

This project has almost been completed. It's still missing a pay-sytem for pro and enterprise, 
an email system for registration and password reset for the user.
Apart from a few styling issues that still need to be done, the webite is fully functional.

**Getting started:**

In order to check this project out you need to do the following:

I'm using  a MySQL DB with XAMPP.
Just install XAMPP and create a db with the name onlineschool and import the onlineschool.sql file.
This file contains all the necessary tables I created for this project.
Don't forget to create a normal DB user, so you won't need root.

After the download put the project in the htdocs Folder.
Under Windows C:\xampp\htdocs\
Put the httaccess file in the htdocs folder. (the httaccess file is necessary for the routing.)
Now, Create a folder called onlineschool and put the project in that folder.

After you've done that, go and find the folder connections and then the file ConToMySQL.php.
Here you need to put your DB username and password into function conToMySQL1.
Normally the pw and username would NOT be in plain text but since it's a local installation for testing that's no problem.

**That's it! You good to go.**

One of my targets , when I was creating this website, was to make sure that there are NO security issues with this website.
Like sql injection, accessing payed for pages by changing the URL , using code in textareas etc. I hope I did a good job.
In case I didn't PLEASE let me know if there are ANY security issues with this website. 


Since it's an onlineschool we have 2 sorts of users.

**Students:**

After registration students get routed to their dashboard. Here they can upload, edit and view their documents (homework).
The documents are bound by userid, so students can only see their own documents.
On the student dashboard they can also update their profile, view the Gallery or get in contact with other students and their teachers.
More important the students can access the learning area they have signed up to.
The routing system takes them (depending of their status) either to the free, pro or enterprise learning area.

**Teachers:**

Teacher have their own Dashboard which is also an admin Dashboard.
The teacher dashboard gives them the option to check edit or delete the students documents (they are able to see all documents), 
upload photos to the gallery, change the content of the free, pro or enterprise learning area. (like a CMS system).
and update their own profile or upload their own documents.

**A documentation of the code functionallity will follow.**

**You can find a mindmap of the Data-flow in the src folder.**

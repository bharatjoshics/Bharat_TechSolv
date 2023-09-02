The whole process is divided into 5 Steps
Step 1: Set up XAMPP
Step 2: Create a MySQL database
Step 3: Create an HTML form
Step 4: Create a PHP file
Step 5: Create a connection

We'll use the $_POST as connection type to get HTML form entries.

We define the fields here. The square brackets contain the values of the name attribute in the input labels of the HTML code.


The method POST is the connection type to send the HTML form entries. The action attribute has the value form.php. This is the name of the PHP file in the working directory, and the form entries will be sent to this file upon submission.

These are the form fields. The last input type is a button that submits the field values to the PHP file.

We'll specify the permissions of the database. This will allow us to add entries to the table.

We use mysqli_connect to create a connection.

Here, we'll confirm if the connection is made. If the connection has failed, we'll get an error message.

We create an SQL query for insertion. Here we add the values that we received from the HTML form.

We send the query to the database over the connection.

This line closes the connection once the entry is inserted.
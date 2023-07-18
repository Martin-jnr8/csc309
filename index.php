<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table>
        <thead>
            <!-- Complete the table header row -->
            <tr>
               <th>SN</th>
               <th>Firsname</th>
               <th>Lastname</th>
               <th>Email</th>
               <th>Gender</th>
               <th>Date of birth</th>
            </tr>
        </thead>

        <tbody>
            <?php
                // Complete code to:
                // Connect to the DB
                // Select all records from users table
                // Display all the selected records
                 $server = 'localhost'; // 127.0.0.1
                 $username = 'root';
                 $password = '';
                 $db = 'csc309';

                 // Open a new connection
                 $con = new mysqli($server, $username, $password, $db);

                 // Check connection
                 if ($con->connect_error){
                 die("Connection failed: " . $con->connect_error);
                 $result = $con->query($sql);

                 if ($result->num_rows > 0){
        
                 while($row = $result->fetch_assoc()){
                 echo $row['id'] . ' ' . $row['firstname'] . ' ' . $row['lastname'] . 
                 ' ' .$row['email'] . '<br>';
                 }

                 } else {
                 echo "No result";
                 }
             ?>
        </tbody>
    </table>
</body>
</html>

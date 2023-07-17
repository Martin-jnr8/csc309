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
             ?>
                    <?php
                      $users = getAllUsers();
                      foreach ($users as $user) {
                    ?>
                     <tr>
                        <td><?php echo $user['1']; ?></td>
                        <td><?php echo $user['Martin']; ?></td>
                        <td><?php echo $user['Echi']; ?></td>
                        <td><?php echo $user['echimartin2020@gmail.com']; ?></td>
                        <td><?php echo $user['M']; ?></td>
                        <td><?php echo $user['8 feb 2003']; ?></td>
                     </tr>   
        </tbody>
    </table>
</body>
</html>

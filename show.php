<html>
<body>
    <div id = "page">
      <h1 align="center">All Records</h>
      <table border="2" align="center">
        <tr>
          <th>Roll No</td>
          <th>Name</td>
          <th>Email</td>
          <th>Mob No</td>
          <th>Gender</td>
          <th colspan="2">Actions</td>
        </tr>

    <?php
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "test";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        $sql = "SELECT rollno , fname , email , concern , dt FROM test";
        $result = mysqli_query($conn,$sql);
        $i=0;
          while($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $row["rollno"]; ?></td>
            <td><?php echo $row["fname"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["concern"]; ?></td>
            <td><?php echo $row["dt"]; ?></td>

            <td><a href="edit.php?rn=<?php echo $row["rollno"]; ?>">  Edit Record </a> </td>

            <td><a href="delete.php?rn=<?php echo $row["rollno"]; ?>"> Delete Record</a> </td>

        </tr>

        <?php
          $i++;
          }
        ?>

      
       </div>
   </table>


<h2 align="center"><a href="index.php"> Go to Home Page </a></h1>

  </body>
  </html> 
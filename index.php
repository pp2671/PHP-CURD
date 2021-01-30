<!doctype html>
<html lang="en">
  <head>
    
    <title>Contact Us</title>
  </head>
  <body>

  <h1 align="center"> Enter Your Contact Details </h1>
  
</h1>
    <form action="index.php" method="post" align="center">
    
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"></br></br></br>
    

   
	<label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        </br></br>
		</br>
    

    
        <label for="desc">Mobile No.</label>
        <input type="integer"  name="desc" id="desc" cols="30" rows="10"></textarea> 
</br></br></br>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
	{                         
        $name = $_POST['name'];
	      $email = $_POST['email'];
        $desc = $_POST['desc'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "test";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `test`(`rollno`, `fname`, `email`, `concern`, `dt`) VALUES (NULL ,'$name', '$email', '$desc', current_timestamp())";
     
        $result = mysqli_query($conn, $sql);

 
        if($result)
        
        {
          
          echo "<h1 align='center'>"."database has been recorded" . "</h1";
          
        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
           
        }

      }

    }

?>

<br><br>
  <center>
  
<a href="index.php"> Register </a> <br><br>

<a href="show.php"> Show all Records </a> <br><br>

</center>
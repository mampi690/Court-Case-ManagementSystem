<?php
session_start();
include 'conn.php';
if(isset($_POST['reg_btn']))
   {
    $title=$_POST['u_title'];
    $case=$_POST['u_case'];
    $type=$_POST['u_type'];
    $regdate= $_POST['u_date'];
    $Payment=$_POST['u_payment'];

    $insert_sql="INSERT INTO `case_record`(`case_title`, `case_type`, `case_details`,`Date`, `payment_status`) 
    VALUES ('$title','$type','$case','$regdate','$Payment')";
    $run=mysqli_query($conn,$insert_sql);

    if($run) 
    {
        $_SESSION['pass']  = $Client_email;
        //header('location:_dashboard.php');
           header('location:client_dashboard.php');
    }
      else
      {
        echo"register unsuccessful";
      }
    
   }
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    h1{
        text-align: center;
     background-color: lightgreen;
     padding: 20px;
    }
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightblue;
  padding: 200px;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
 
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action= "clientcase_registration.php" method="POST">
  <div class="container">
    <h1><b><strong> Case Registration Info</strong> <b></h1>
    <p>Please fill in this form to your cases.</p>
    <hr>

     <label for="case title"><b>Case Title</b></label>
    <input type="text" id="u_title" placeholder="Ennter Case Title" name="u_title" required>

    <label for="register"><b>Register date</b></label>
    <input type="text" id="u_date" placeholder="Enter Register Date" name="u_date" required>

    <label for="gender"><b>Case Type<b>:</label>

            <select id="u_type" name="u_type">
              <option value="criminal">criminal cases</option>
              <option value="civil">civil cases</option>
              <option value="Estate administration">Estate administration cases</option>
            </select><br></br>
   <div>
    <label for="un"><b>About Your Cases<b>:</label>
    <textarea rows="4" cols="100" class="form-control" type="text" id="u_case" placeholder="About Your Cases" name="u_case" required=""></textarea>
   </div> <br></br>

    <label for="payment_status"><b>Payment_status</b></label>
    <input type="text" id="u_payment" placeholder="Ennter Payment Status" name="u_payment" required>
   
    <button type="submit" id="reg_btn" name="reg_btn" class="registerbtn">Register</button>
  </div>
  
  
</form>

</body>
</html>
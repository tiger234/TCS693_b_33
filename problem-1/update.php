
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem-1</title>
    <style>
    *{
        margin:0;
        padding:0;
        font-family:helvetica,sans-serif;
    }

    h1{
        margin:15px 15px;
        margin-bottom:0;
        font-size:36px;    
    }
     p{
         margin-left:15px;
     }
    input{
        font-size:18px;
        margin:15px;
        display:block;
        padding:10px;
        height:5px;
    }
    input[type="submit"]{
        height:auto;
        padding:8px;
        border:none;
        background:#1fbf49;
        color:#fff;

    }
    h3{
        position:absolute;
        bottom:15px;
        left:15px;
        font-size:16px;
        font-weight:600;
    }
    </style>
</head>
<body>
<h1>Form </h1>
    <form action="" method="post">
    <input type="text" inputmode="numeric" pattern="[0-9]*" name="eno"  value="<?php echo $_GET['eno']; ?>">
    <input type="text" name="fname" value="<?php echo $_GET['fname'] ?>">
    <input type="text" inputmode="numeric" pattern="[0-9]*" name="age" value="<?php echo $_GET['age'] ?>">
    <input type="text" name="course" value="<?php echo $_GET['course'] ?>">
    <input type="text" name="branch" value="<?php echo $_GET['branch'] ?>">
    <input type="text" inputmode="numeric" pattern="[0-9]*" name="contact" value="<?php echo $_GET['contact'] ?>">
    <input type="email" name="email" value="<?php echo $_GET['email'] ?>">
    <input type="submit" name="submitbutton" placeholder="Submit" value="Update">
    </form>
    <h3>submitted by Nav Jindal (B-33)</h6>
</body>
<?php
  
 if(isset($_POST['submitbutton']))
 {   $eno=$_POST["eno"];
    $fname=$_POST["fname"];
    $age=$_POST["age"];
    $course=$_POST["course"];
    $branch=$_POST["branch"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    include("connection.php"); 
    $sql = "UPDATE cse2020 SET enrollmentno='$eno', fname='$fname', age='$age', course='$course', branch='$branch', contact='$contact', email='$email' where enrollmentno='$eno'";
    if(mysqli_query($conn, $sql))
    {echo "updated";}
    else
    {echo "not updated";} 
}
?>
</html>
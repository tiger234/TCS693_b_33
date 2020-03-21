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
    <form action="logic.php" method="post">
    <input type="text" inputmode="numeric" pattern="[0-9]*" name="eno" placeholder="Enrollment No.">
    <input type="text" name="fname" placeholder="Full Name">
    <input type="text" inputmode="numeric" pattern="[0-9]*" name="age" placeholder="Age">
    <input type="text" name="course" placeholder="Course">
    <input type="text" name="branch" placeholder="Branch">
    <input type="text" inputmode="numeric" pattern="[0-9]*" name="contact" placeholder="Contact">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" name="submitbutton" placeholder="Submit" value="Submit">
    </form>
    <h3>submitted by Nav Jindal (B-33)</h6>
</body>
</html>
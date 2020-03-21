<?php
 
include("connection.php");
$eno=$_POST["eno"];
$fname=$_POST["fname"];
$age=$_POST["age"];
$course=$_POST["course"];
$branch=$_POST["branch"];
$contact=$_POST["contact"];
$email=$_POST["email"];
if(isset($_POST["submitbutton"]))
{ $sql = "INSERT INTO cse2020 (enrollmentno, fname, age, course, branch, contact, email ) 
 VALUES ('$eno', ' $fname', '$age', '$course', '$branch', '$contact', '$email')";
 mysqli_query($conn, $sql);
}
 
 ?> 
<style>
    table{
        border-collapse:collapse;
        border:1px solid lightgrey;
    }
    th{
        padding:10px;
    }
   td,th{
       border:1px dotted lightgrey;
   }
   td{
       padding:7px;
   }
   tr:nth-child(even){
       background:#e3e3e3;
   }
</style>
 <table>
    <tr>
      <th>Enrolment No.</th>
      <th>Name</th>
      <th>Age</th>
      <th>Course</th>
      <th>Branch</th>
      <th>Contact </th>
      <th>Email</th>
      <th>Edit</th>
      <th>Delete</th>
   </tr>
  <?php 
  $data = mysqli_query($conn,"SELECT * FROM  cse2020");
  while($result = mysqli_fetch_assoc($data))
  {   echo "<tr>
              <td>".$result["enrollmentno"]."</td>
              <td>".$result["fname"]."</td>
              <td>".$result["age"]."</td>
              <td>".$result["course"]."</td>
              <td>".$result["branch"]."</td>
              <td>".$result["contact"]."</td>
              <td>".$result["email"]."</td>
              <td><a href='update.php?eno=$result[enrollmentno]&fname=$result[fname]&age=$result[age]&course=$result[course]&branch=$result[branch]&contact=$result[contact]&email=$result[email]'>Edit </a></td>
              <td><a href='delete.php?eno=$result[enrollmentno]&fname=$result[fname]&age=$result[age]&course=$result[course]&branch=$result[branch]&contact=$result[contact]&email=$result[email]' onclick='check()'>Delete </a></td>
           </tr>";
  }
  ?>
</table>
<script type="text/javascript">

function check(){
    confirm("Are you sure you want to delete");
}
</script>
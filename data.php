<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db("college", $connection);
if(isset($_POST['submit'])){ 
$name = $_POST['name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$query = mysqli_query("insert into students(student_name, student_email, student_branch, student_year) values ('$name', '$email', '$branch', '$year')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
mysqli_close($connection);
}
?>
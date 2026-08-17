<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 7 Unit 4</title>
</head>
<body>
    <h3>Update Data in MySQL Table</h3>
    <?php
$conn=mysqli_connect("localhost","root","","");

$sql="UPDATE users SET name='Ramesh' WHERE id=2";

if(mysqli_query($conn,$sql)){
echo "Record Updated";
}
?>
    
</body>
</html>
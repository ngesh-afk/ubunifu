<!doctype html>
<html>
<head><title>fetch data</title></head>

<body>

<?php
include('dbConfig.php');
$result = mysqli_query($conn,"SELECT * , 'total'-'present' AS 'absent' FROM users");
if (mysqli_num_rows($result) > 0) {
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<table>
<tr>
<td>NAME</td>
<td>DATE</td>
<td>ABSENT</td>
<td></td>
</tr>
<tr>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["absent"]; ?></td>
</tr>
</table>
<p><?php echo $row["time"]; ?></p>


<?php
$i++;
}
}
else{
echo "No result found";
}
?>

</body>
</html>
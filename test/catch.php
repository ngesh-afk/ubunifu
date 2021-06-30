<!doctype html>
<html>
<head><title>fetch data</title></head>

<body>

<!...php code select all fields from a table....>
<?php
include('dbConfig.php');
$result = mysqli_query($conn,"SELECT * FROM users");
if (mysqli_num_rows($result) > 0) {
?>

<!...table lables where data is to be displayed...>
<table class='table table-bordered table-striped'>
<tr>
<td>Name</td>
<td>Date</td>
<td>Time</td>
</tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["time"]; ?></td>
</tr>

<?php
$i++;
}
?>

</table>

<?php
}
else{
echo "No result found";
}
?>

</body>
</html>
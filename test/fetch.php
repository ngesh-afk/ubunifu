
<!Doctype html>
<html>
<head>
<title>Display details</title>
</head>
<body>
<p>View response</p>
<?php

include('dbConfig.php');

$sql = "SELECT username, date, time FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "username: " . $row["username"]. 
         "date: " . $row["date"].
         "time: " . $row["time"]. "<br>";

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>



</body>
</html>




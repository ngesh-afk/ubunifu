
 <?php
//include database connection
include('dbConfig.php');

//the post action to send data to the database on clicking save button
 if(isset($_POST['save']))
{
   $sql = "INSERT INTO users (username, date, time, total, present) 
   VALUES ('".$_POST["username"]."','".$_POST["date"]."','".$_POST["time"]."','".$_POST["total"]."','".$_POST["present"]."')";
   $result = mysqli_query($conn,$sql);

   if($result){
      //results on successful post of data to database table
      echo "form saved";
   }else{
      //results on failure to post of data to database table
       echo "form not saved"; 
   }
}
?>
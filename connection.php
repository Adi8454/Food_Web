$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);
}
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
   
    $sql = "INSERT INTO `food_web`.`food` (`name`, `email`, `pass`, `partysize`, `date`,`time`,`message`,`phone`,`gender`,) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
	if($con->query($sql) == true){
        echo "Successfully inserted";}
		$con->close();
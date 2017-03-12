<?php 

if(isset($_POST['host']))
{
	$ip  = (isset($_POST['ip'])) ? $_POST['ip'] : '0.0.0.0'; 
	$method = (isset($_POST['method'])) ? $_POST['method'] : 'default';
	$hostname = $_POST['host'];

	echo "Data received: " . $hostname;

	$sql = "INSERT INTO checkin(checkin_host, checkin_method,checkin_ip) VALUES ('$hostname','$method','$ip')";

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'password';
	$dbname = 'homesys';
  	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass); 
	try {
		$CHECKNAME = $dbh->prepare($sql);
		$CHECKNAME->execute();
		$CHECKNAME = null;
	}
	catch(PDOException $exception)
	{
	 	echo $exception->getMessage();
	}
}
else 
{
    echo "No data received";
}
?>


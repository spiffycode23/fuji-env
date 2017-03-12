<?php 

if(isset($_POST['host']))
{
$ip = '';
$method = 'default';
	if(isset( $_POST['ip']))
	{
		$ip = $_POST['ip'];
	}
	else
	{
		$ip = "0.0.0.0";
	}
	if(isset( $_POST['method']))
	{
		$method = $_POST['method'];
	}
	else
	{
		$method = "curl/cron";
	}

	$hostname = $_POST['host'];
	echo "Data received: " . $hostname;
	$sql = "INSERT INTO checkin(checkin_host, checkin_method,checkin_ip) VALUES ('$hostname','$method','$ip')";
echo $sql;

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

   
	   echo "Entered data successfully\n";
   
	}
	else 
	{
	    echo "No data received";
	    ?>
 	    <form action="checkin.php" method="post">
	    <p>Hostname:</p>
	    <input type="text" name="host" />
	    <input type="submit" value="Test" name="test" />
	    </form>
	<?php
        }
?>


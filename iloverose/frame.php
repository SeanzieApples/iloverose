<div id=line>
<?php
	$dbhost = getenv('MYSQL_HOST');
        $dbuser = getenv('MYSQL_USER');
        $dbpass = getenv('MYSQL_PASSWORD');
        $dbname = getenv('MYSQL_DATABASE');
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	$result = mysqli_query($connect,"SELECT reasons FROM reasons ORDER BY RAND() LIMIT 1");
	$aRow = mysqli_fetch_array($result);
	echo $aRow['reasons'];
?>
</div>

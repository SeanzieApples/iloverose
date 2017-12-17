<?php
        $dbhost = getenv('MYSQL_HOST');
        $dbuser = getenv('MYSQL_USER');
        $dbpass = getenv('MYSQL_PASSWORD');
        $dbname = getenv('MYSQL_DATABASE');
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        $reasons = "$_POST[reasons]";
        if(preg_match('/[^a-zA-Z0-9_\\s]/', $reasons) == 0)
        {
        	$result = mysqli_query($connect,"SELECT * FROM reasons WHERE reasons='$reasons'");
                $num_rows = mysqli_num_rows($reasons);
                if($num_rows)
                {
                	echo "Entry already found.";
                }
                else
                {
                	mysqli_query($connect,"INSERT INTO reasons (reasons) VALUES ('$reasons')");
                        echo "The reason been added successfully!";
                }
        }
        else
        {
        	echo "Invalid characters found. Please try again";
        }
?>

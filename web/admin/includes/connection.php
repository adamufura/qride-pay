<?php
  			$host = 'localhost';
            $user = 'root';
            $pass = '';
            $data = 'qride';
        
        $connection = mysqli_connect($host, $user, $pass, $data);
        if (!$connection){
            echo "Not Connected";
        } else {
            // echo "Connected";
        }

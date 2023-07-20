<?php
  			$host = 'localhost';
            $user = 'root';
            $pass = '';
            $data = 'exams';
        
        $conn = mysqli_connect($host, $user, $pass, $data);
        if (!$conn){
            echo "Not Connected";
        } else {
            // echo "Connected";
        }

?>
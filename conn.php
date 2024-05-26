<?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blood_management";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        // else{
        //     echo "sucess";
        // }
        // Query to fetch donor data
        
        
        
        ?>
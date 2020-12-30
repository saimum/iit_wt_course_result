<?php

    function execute_query($sql)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iit_wt_course_result";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        return $result;
        $conn->close();
    }
    
    function get_mark($fk_teacher, $fk_course, $fk_student)
    // function get_mark()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iit_wt_course_result";

        $sql = "SELECT mark FROM `result_sheet` WHERE fk_teacher = '".$fk_teacher."' and fk_course = '".$fk_course."' and fk_student = '".$fk_student."'";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            return -1;
        }else{
            $row = $result -> fetch_assoc();
            return $row["mark"];
        }   
        $conn->close();
    }

    


?>
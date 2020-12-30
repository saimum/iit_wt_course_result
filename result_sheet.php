<?php require_once('db_con.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Result</title>
</head>
<body>
<?php

$sql_course = "SELECT * FROM course";
$result_course = execute_query($sql_course);
while($row_course = $result_course->fetch_assoc()) {
    echo "<h1>Course: ". $row_course["code"]."</h1>";
    echo "<table style='width:50%'>"
    ."<tr>"
        ."<td>"."<b>Student Name</b>"."</td>"
        ."<td>"."<b>Mark From Sakib Sir</b>"."</td>"
        ."<td>"."<b>Mark% From Sakib Sir</b>"."</td>"
        ."<td>"."<b>Mark From Rakib Sir</b>"."</td>"
        ."<td>"."<b>Mark% From Rakib Sir</b>"."</td>"
        ."<td>"."<b>Mark% Deviation</b>"."</td>"
        ."<td>"."<b>Final Mark</b>"."</td>"
    ."</tr>";
    
    $sql_student = "SELECT * FROM student";
    $result_student = execute_query($sql_student);
    while($row_student = $result_student->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row_student["name"]."</td>";
        $mark_1= get_mark(1, $row_course["pk_course"], $row_student["pk_student"]);
        echo "<td>".(($mark_1<0) ? "Not Given" : $mark_1)."</td>";
        echo "<td>".(($mark_1<0) ? "Not Given" : round ( $mark_1/50*100)."%" )."</td>";
        $mark_2= get_mark(2, $row_course["pk_course"], $row_student["pk_student"]);
        echo "<td>".(($mark_2<0) ? "Not Given" : $mark_2)."</td>";
        echo "<td>".(($mark_2<0) ? "Not Given" : round ( $mark_2/50*100)."%" )."</td>";
        
        $mark_deviation = "N/A";
        if($mark_1>-1 && $mark_2>-1){
            $mark_deviation = abs(($mark_1/50*100)-($mark_2/50*100));
        }
        echo "<td>".(gettype($mark_deviation) == "string"? $mark_deviation : $mark_deviation."%" )."</td>";
        
        $mark_final = "N/A";
        if($mark_1>-1 && $mark_2>-1 && (gettype($mark_deviation) != "string") && $mark_deviation < 20){
            $mark_final = abs((($mark_1+$mark_2)/2));
        }
        echo "<td>".$mark_final."</td>";
        echo "</tr>";
    }
    echo"</table>";

}

?>




</body>
</html>
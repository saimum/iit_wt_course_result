<?php require_once('db_con.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insert</title>
</head>
<body>
<form action="insert_post.php" method="post">
    <p>
        <label>teacher:</label>
        <select id="pk_teacher" name="pk_teacher">
            <option value="1">Sakib Sir</option>
            <option value="2">Rakib Sir</option>        
        </select>
    </p>
    <p>
        <label>course code:</label>
        <select id="pk_course" name="pk_course">
        <?php
        $sql = "SELECT * FROM course";
        $result = execute_query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<option value='". $row["pk_course"]."'>". $row["code"]."</option>";
            }
        }else{
            print_r("db not cennected 2");
        }
        ?>
        </select>
    </p>
    <table style="width:50%">
        <tr>
            <td><b>Student Name</b></td>
            <td><b>Mart(out of 50)</b></td>
        </tr>
        <?php
        $sql = "SELECT * FROM student";
        $result = execute_query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["name"]."</td>";
                echo "<td><input id='mark_of_student_".$row["pk_student"]."' name='mark_of_student_".$row["pk_student"]."' type='number' ></td>";
                echo "</tr>";
            }
        }else{
            print_r("db not cennected");
        }
        ?>
        
    </table>






    <input type="submit" value="Submit">
</form>
</body>
</html>
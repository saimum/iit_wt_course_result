<?php require_once('db_con.php'); ?>
<html>
<body>

<h2>Mark Given</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pk_teacher = $_POST['pk_teacher'];
  $pk_course = $_POST['pk_course'];
  //delete this teacher this course mark
    $sql_delete= "delete FROM `result_sheet` WHERE fk_teacher = '".$pk_teacher."' AND fk_course = '".$pk_course."'";
    // echo $sql_delete;
    execute_query($sql_delete);

    //get all student then traverse
  $sql_select = "SELECT * FROM student";
  $result = execute_query($sql_select);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $mark_of_student = $_POST["mark_of_student_".$row["pk_student"]];
        // echo $mark_of_student_;
        $sql = "INSERT INTO `result_sheet` "
        ."(`fk_teacher`, `fk_course`, `fk_student`, `mark`) VALUES "
        ."('".$pk_teacher."', '".$pk_course."', '".$row["pk_student"]."', '".$mark_of_student."');";
        execute_query($sql);
      }
  }

}
?>

</body>
</html>
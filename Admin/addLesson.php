<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION)){
    session_start();
}


include('./admininclude/header.php');
include('../dbConnection.php');


if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminLogEmail'];
}
else{
    echo "<script> location.href='../index.php'; </script>";
} 



if(isset($_REQUEST['lessonSubmitBtn'])){

    // checking for empty fields 

    if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

    }

    else {
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['course_name'];
        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        
        $link_folder = '../lessonvid/'.$lesson_link;;

        move_uploaded_file($lesson_link_temp, $link_folder);

        

        $sql = "INSERT INTO lesson (lesson_name, lesson_desc, lesson_link, course_id, course_name) VALUES('$lesson_name', '$lesson_desc','$link_folder',  '$course_id', '$course_name')";


        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Lesson Added Successfully</div>';
        }
        else{
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Lesson</div>';
        }
    }
}
?>








<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-Center">Add New Course</h3>
    
    
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id"  value="<?php if(isset($_SESSION['course_id'])) {echo $_SESSION['course_id'];} ?>" readonly>
        </div>


        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($_SESSION['course_name'])) {echo $_SESSION['course_name'];} ?>" readonly>
        </div>

        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input name="lesson_name"  class="form-control" id="lesson_name" rows="2">
        </div>

        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea type="text" class="form-control" id="lesson_desc" name="lesson_desc"></textarea>
        </div>

        <div class="form-group">
            <label for="lesson_link">Lesson Video Link</label>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>

        

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn" value="Submit">Submit</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
        </div>
        
        <?php if(isset($msg)) {echo $msg;} ?>

        
    </form>
</div>
        

</div> <!-- div row close from header  -->

</div> <!-- div container-fluid close from header  -->





<?php 
include('./admininclude/footer.php')
?>
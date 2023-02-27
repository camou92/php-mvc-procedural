<?php
require_once('models/modelCourses.php');

function addOneCourse(){
    if(isset($_POST['enregistrer'])){
        if(!empty($_POST['courseCode']) && !empty($_POST['courseTitle']) && !empty($_POST['courseLangage'])){

            addCourse($_POST['courseCode'],$_POST['courseTitle'], $_POST['courseLangage']);
        } else {
            echo "Tous les champs sont requis !";

        }
    }

    require_once('views/viewCourse.php');
}
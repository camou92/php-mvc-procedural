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

function getAllCourses(){
    $resultGetCourses = getCourses();

    if(!$resultGetCourses){
        $message = "La récupération des cours n'a pas abouti !";
    } else{
        $nb_courses = $resultGetCourses->rowCount();
        if($nb_courses == 0){
            $message = "Il n'y a aucun cours pour le moment !";
            addOneCourse();
        }else{
            require_once('views/viewAllCourses.php');
        }
    }

    $resultGetCourses->closeCursor();
}
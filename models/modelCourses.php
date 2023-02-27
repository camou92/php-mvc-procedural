<?php

require_once('models/model.php');

function addCourse($courseCode, $courseTitle, $courseLangage){
    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO courses(courseCode, courseTitle, courseLangage) VALUES (:courseCode, :courseTitle, :courseLangage)');

    $requete->bindValue(':courseCode', $courseCode);
    $requete->bindValue(':courseTitle', $courseTitle);
    $requete->bindValue(':courseLangage', $courseLangage);

    $result = $requete->execute();
    return $result;
}

function getCourses(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM courses ORDER BY courseId ASC";
    $resultGEtCourses =  $bddPDO->query($requete);
    return $resultGEtCourses;
}
<?php
require __DIR__."/vendor/autoload.php";
$studentController = new \QLD\Controller\StudentController();
$subjectController = new \QLD\Controller\SubjectController();
$pointController = new \QLD\Controller\PointController();
$page = isset($_REQUEST["page"])? $_REQUEST["page"]: NULL;

switch ($page){
    case "add-student":
        $studentController->addStudent();
        break;
    case "add-point":
        $pointController->addPoint();
        break;
    case "delete-student":
        $studentController->deleteStudent();
        break;

    case "point-subject":
        $subjectController->showSubject();
        break;
//    case "point-list":
//        $pointController->showPoint();;
//        break;
    case "list-student":
        $studentController->showStudent();
        break;
    case "list-point":
        $pointController->showPoint();
        break;
    case "search":
        $studentController->search();
        break;
    default :
        $studentController->showGuest();
//        $subjectController->show();
//        $studentController->showProduct();

}
?>
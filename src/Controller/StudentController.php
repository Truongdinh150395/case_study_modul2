<?php


namespace QLD\Controller;
use QLD\Model\Students;
use QLD\Model\StudentModel;

class StudentController
{
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }
    function showGuest(){
        include_once "src/View/guest.php";

    }
    function showStudent(){
        $students = $this->studentModel->getAll();
        include_once "src/View/listStudent.php";
    }
    function addStudent(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include_once "src/View/addStudent.php";
        }else {
            $classCode = $_REQUEST["classCode"];
            $name = $_REQUEST["name"];
            $gender = $_REQUEST["gender"];
            $date = $_REQUEST["date"];
            $address = $_REQUEST["address"];
            $student = new Students($classCode,$name,$gender,$date, $address);
            $this->studentModel->addStudent($student);

            header("location:index.php?page=list-student");
        }
    }
    function deleteStudent(){
        $id = $_REQUEST["id"];
        $this->studentModel->deleteStudent($id);
        header("location:index.php");
    }
    function addPoint(){
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST["student_id"];
            $student = $this->studentModel->getByStudent($id);
            include_once "src/View/listSubject.php";
        }
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $search = "%" . $_REQUEST['search'] . "%";
            $students = $this->studentModel->search($search);
            include_once "src/View/search.php";
        }
    }
}
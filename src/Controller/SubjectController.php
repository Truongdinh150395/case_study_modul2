<?php


namespace QLD\Controller;
use QLD\Model\Subject;
use QLD\Model\SubjectModel;

class SubjectController
{
    protected $subjectModel;
    public function __construct()
    {
        $this->subjectModel = new SubjectModel();
    }
    function showSubject(){
        $subjects = $this->subjectModel->getAll();
        include_once "src/View/listSubject.php";
    }
    function addPoint(){

    }
}
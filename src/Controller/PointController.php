<?php


namespace QLD\Controller;
use QLD\Model\Point;
use QLD\Model\PointModel;

class PointController
{
    protected $pointModel;
    public function __construct()
    {
        $this->pointModel = new PointModel();
    }
    function showPoint(){
        $points = $this->pointModel->getAll();
        include_once "src/View/listPoint.php";
    }
    function addPoint(){
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            include_once "src/View/add_Point.php";
        } else {
            $studentCode = $_REQUEST["studentCode"];
            $toan = $_REQUEST["toan"];
            $van = $_REQUEST["van"];
            $anh = $_REQUEST["anh"];
            $point = new Point($studentCode,$toan,$van,$anh);
            $this->pointModel->addPoint($point);
            header("location:index.php?page=list-point");
        }
    }
}
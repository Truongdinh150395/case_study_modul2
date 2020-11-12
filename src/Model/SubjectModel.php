<?php


namespace QLD\Model;


class SubjectModel
{
    protected $DBConnect;
    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }
    function getAll(){
        $sql = "SELECT * FROM `Subject`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $subjects = [];
        foreach ($data as $item){
            $subject = new Subject($item["SubjectName"]);
            $subject->setIdSubject($item["id_Subject"]);
            array_push($subjects,$subject);
        }
        return $subjects;
    }
    function addPoint($point){
        $sql = "INSERT INTO `Point`( `id_Subject`, `id_Student`, `Semester_point`) VALUES (:id_Subject,:id_Student,:id_Student)";
        $stmt  = $this->DBConnect->prepare($sql);
        $stmt->bindParam("id_Subject",$point->getSubjectsId());
        $stmt->bindParam("id_Student",$point->getStudentId());
        $stmt->bindParam("Semester_point",$point->getSemesterPoint());
        $stmt->execute();
    }
}
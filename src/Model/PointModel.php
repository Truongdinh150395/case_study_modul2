<?php


namespace QLD\Model;


class PointModel
{
    protected $DBConnect;
    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }
    function getAll(){
        $sql = "SELECT * FROM `Point`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $poins = [];
        foreach ($data as $item){
            $poin = new Point($item["id_Student"],$item["math"],$item["literature"],$item["english"]);
            $poin->getId($item["id"]);
            array_push($poins,$poin);
        }
        return $poins;
    }
    function addPoint($point) {
        $sql = "INSERT INTO `Point`(`id_Student`, `math`, `literature`, `english`) VALUES (:id_Student,:math,:literature,:english)";
        $stmt  = $this->DBConnect->prepare($sql);
        $stmt->bindParam(":id_Student",$point->getStudentId());
        $stmt->bindParam(":math",$point->getMath());
        $stmt->bindParam(":literature",$point->getLiterature());
        $stmt->bindParam(":english",$point->getEnglish());
        $stmt->execute();
    }
}
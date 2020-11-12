<?php


namespace QLD\Model;


class Point
{
    protected $id;
    protected $math;
    protected $student_id;
    protected $literature;
    protected $english;
    public function __construct($student_id,$math,$literature,$english)
    {
        $this->student_id = $student_id;
        $this->math = $math;
        $this->literature = $literature;
        $this->english = $english;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * @param mixed $math
     */
    public function setMath($math)
    {
        $this->math = $math;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getLiterature()
    {
        return $this->literature;
    }

    /**
     * @param mixed $literature
     */
    public function setLiterature($literature)
    {
        $this->literature = $literature;
    }

    /**
     * @return mixed
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * @param mixed $english
     */
    public function setEnglish($english)
    {
        $this->english = $english;
    }

}
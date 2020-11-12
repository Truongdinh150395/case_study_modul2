<?php


namespace QLD\Model;


class Students
{
    protected $id;
    protected $id_class;
    protected $name;
    protected $gender;
    protected $date;
    protected $address;
    public function __construct($id_class,$_name,$_gender,$_date,$_address)
    {
        $this->id_class = $id_class;
        $this->name = $_name;
        $this->gender = $_gender;
        $this->date = $_date;
        $this->address = $_address;
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
    public function getIdClass()
    {
        return $this->id_class;
    }

    /**
     * @param mixed $id_class
     */
    public function setIdClass($id_class)
    {
        $this->id_class = $id_class;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }



}
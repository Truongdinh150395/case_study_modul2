<?php


namespace QLD\Model;


class ClassStudent
{
    protected $id;
    protected $classname;
    public function __construct($_classname)
    {
        $this->classname = $_classname;
    }
}
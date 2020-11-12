<?php


namespace QLD\Model;


class Subject
{
    protected $id_Subject;
    protected $subjectName;
    public function __construct($subjectName)
    {
        $this->subjectName = $subjectName;
    }

    /**
     * @return mixed
     */
    public function getIdSubject()
    {
        return $this->id_Subject;
    }

    /**
     * @param mixed $id_Subject
     */
    public function setIdSubject($id_Subject)
    {
        $this->id_Subject = $id_Subject;
    }

    /**
     * @return mixed
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param mixed $subjectName
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }

}
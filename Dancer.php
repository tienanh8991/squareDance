<?php


class Dancer
{
    protected $name;
    protected $gender;

    public function __construct($gender,$name)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }
}
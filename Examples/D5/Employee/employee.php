<?php
class employee{
    private $man_no;
    private $name;
    protected $position;

    public function __construct($man_no, $name, $position)
    {
        $this->man_no = $man_no;
        $this->name = $name;
        $this->position = $position;
    }
    public function getManNo()
    {
        return $this->man_no;
    }
    public function setManNo($man_no): void
    {
        $this->man_no = $man_no;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function setPosition($position): void
    {
        $this->position = $position;
    }



}
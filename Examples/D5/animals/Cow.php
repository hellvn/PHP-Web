<?php
class cow extends Animal{
    private $owner;


    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }

    public function getOwner()
    {
        return $this->owner;
    }
    public function setOwner($owner): void
    {
        $this->owner = $owner;
    }


}
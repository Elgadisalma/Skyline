<?php

class Event implements Details{

    protected $type;
    private $description;
    private $event_time;

    public function __construct($type, $event_time, $description) {
        $this->type = $type;
        $this->event_time = $event_time;
        $this->description = $description;
    }


    // Getters

    public function getType($type)
    {
        return $type;
    }

    public function getDescription($description)
    {
        return $description;
    }

    public function getTime($event_time)
    {
        return $event_time;
    }



    // Setters

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setTime($event_time)
    {
        $this->event_time = $event_time;
    }


    public function afficherDetails()
    {
        echo "Event: type: {$this->type}, event_time: {$this->event_time}, description: {$this->description}\n";
    }

}

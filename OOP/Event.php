<?php

class Event implements description{

    protected $type;
    private $description;
    private $event_time;

    public function __construct($type, $event_time, $description) {
        $this->type = $type;
        $this->event_time = $event_time;
        $this->description = $description;
    }


}

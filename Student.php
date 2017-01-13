<?php
class Student{
    
    //constructor of Student class
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->email = array();
        $this->grades = array();
    }
    
    //set emails
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    //set grades
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //calculate the average of grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //show firstname, surname, emails and average of grades for each student
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
 }


<?php

class Assignment {
    private $assignment_id, $question, $total_marks,$due_date;
    
    public function __construct($assignment_id, $question, $total_marks,$due_date)
    {
        $this->assignment_id = $assignment_id;
        $this->question = $question;
        $this->total_marks = $total_marks;
        $this->due_date = $due_date;
    }
       
    public function getAssignment_id() {
        return $this->assignment_id;
    }
    public function getQuestion() {
        return $this->question;
    }
    public function getTotal_marks() {
        return $this->total_marks;
    }
    public function getDue_date() {
        return $this->due_date;
    }
    
    public function setAssignment_id($assignment_id) {
        $this->assignment_id = $assignment_id;
    }
    public function setQuestion($question) {
        $this->question = $question;
    }
    public function setTotal_marks($total_marks) {
        $this->total_marks = $total_marks;
    }
    public function setDue_date($due_date) {
        $this->due_date = $due_date;
    }
}
?>

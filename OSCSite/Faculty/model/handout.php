<?php
    
class Handout
{
    private $h_week_id,$material;
    public function __construct($h_week_id,$material)
    {
        $this->h_week_id = $h_week_id;
        $this->material = $material;
    }    
    public function getH_Week_Id() {
        return $this->h_week_id;
    }
    public function getMaterial() {
        return $this->material;
    }
    
    public function setH_Week_Id($h_week_id) {
        $this->h_week_id = $h_week_id;
    }
    public function setLName($material) {
        $this->material = $material;
    }
}
?>
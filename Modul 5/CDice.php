<?php
/**
 * Klass CDice.php
 * Används av dice.php
 */


class CDice
{

    public $rolls = array();

    public function Roll($times) {

        $this->rolls = array();

        for($i = 0; $i < $times; $i++) {
            $this->rolls[] = rand(1, 6);
        }
    }

    public function GetTotal() {
        return array_sum($this->rolls);
    }

    public function GetAverage() {
        return round(array_sum($this->rolls) / count($this->rolls), 1);
    }

}

<?php
class Student
{
    public $block;
    public $name;
    public $year;

    public function __construct($name, $block, $year)
    {
        $this->name = $name;
        $this->block = $block;
        $this->year = $year;
    }

    public function displayInfo()
    {
        echo "Student: {$this->name} {$this->block} {$this->year}" . "<br>";
    }
}

$student1 = new Student("Alili", "Block-2", 2020);
$student2 = new Student("Pagliawan", "Block-1", 2021);

$student1->displayInfo();
$student2->displayInfo();

?>
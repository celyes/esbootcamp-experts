<?php

class Achievement
{

    // achievement badge
    public function name()
    {
        return trim(strtolower(preg_replace("/[A-Z]/", " $0", (new ReflectionClass($this))->name)));
    }

    public function logo()
    {
        return str_replace(" ", "-", $this->name()) . ".png";
    }
}

class FastLearner extends Achievement
{

}


class SuperLearner extends Achievement
{

}
$fastleaner = new FastLearner();
$superlearner = new SuperLearner();
echo $fastleaner->name();
echo "<br>";
echo $fastleaner->logo();
echo "<br>";
echo "--------<br>";
echo $superlearner->name();
echo "<br>";
echo $superlearner->logo();
echo "<br>";
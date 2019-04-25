<?php


namespace Gregb\Students\App;


interface IDivisionStrategy
{
    public function DivideToLists(array $studentsList):array;
}
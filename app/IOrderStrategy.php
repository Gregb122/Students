<?php


namespace Gregb\Students\App;


interface IOrderStrategy
{
    public Function OrderStudents(array $studentsList):array ;
}
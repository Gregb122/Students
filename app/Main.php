<?php


namespace Gregb\Students\App;


use DateTimeImmutable;
use Gregb\Students\App\Model\Application;
use Gregb\Students\App\Model\Student;

class Main
{

    public function Test():void
    {
        $listTest = [];
        for ($i = 0; $i < 200; $i++)
        {
            $listTest += new Application(
                new Student("Grzegorz","Bielecki".$i),
                new DateTimeImmutable("now"),
                rand(0, 100));
        }

        $a = new ADivision();
        $b = new BDivision();
        $c = new CDivision();

        $listTestA = $a->DivideToLists($listTest);
        $listTestB = $b->DivideToLists($listTest);
        $listTestC = $c->DivideToLists($listTest);

        $this->EchoStudentsList($listTestA);
        $this->EchoStudentsList($listTestB);
        $this->EchoStudentsList($listTestC);
    }

    private function EchoStudentsList(array $studentList):void
    {
        foreach ($studentList as $studentsConcreteList)
        {
            foreach ($studentsConcreteList as $application)
            {
                echo $application->getStudent()->getLastName()
                    ." ".$application->getSubmissionDate()
                    ." ".$application->getPoints();
            }
        }
    }
}
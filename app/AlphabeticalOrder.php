<?php


namespace Gregb\Students\App;


use Gregb\Students\App\Model\Application;

class AlphabeticalOrder implements IOrderStrategy
{

    public function OrderStudents(array $studentsList): array
    {
        return usort($studentsList,
            function (Application $a,Application $b)
                {return strcmp($a->getStudent()->getLastName(),
                               $b->getStudent()->getLastName());});
    }
}
<?php


namespace Gregb\Students\App;


use Gregb\Students\App\Model\Application;

class ByPointsOrder implements IOrderStrategy
{

    function cmp(int $a, int $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a > $b) ? -1 : 1;
    }

    public function OrderStudents(array $studentsList): array
    {
        return usort($studentsList,
            function(Application $a, Application $b)
            {$this->cmp($a->getPoints(),
                $b->getPoints());});
    }
}
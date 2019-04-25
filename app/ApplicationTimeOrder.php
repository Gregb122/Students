<?php


namespace Gregb\Students\App;


use DateTimeImmutable;
use Gregb\Students\App\Model\Application;

class ApplicationTimeOrder implements IOrderStrategy
{
    function cmp(DateTimeImmutable $a, DateTimeImmutable $b)
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
                {$this->cmp($a->getSubmissionDate(),
                     $b->getSubmissionDate());});
    }
}
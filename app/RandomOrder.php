<?php


namespace Gregb\Students\App;


class RandomOrder implements IOrderStrategy
{

    function OrderStudents(array $studentsList): array
    {
        return shuffle($studentsList);
    }
}
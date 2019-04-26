<?php


namespace Gregb\Students\App;


class CDivision implements IDivisionStrategy
{

    public function DivideToLists(array $studentsList): array
    {
        $randomOrder= new RandomOrder();
        $alphabeticalOrder = new AlphabeticalOrder();


        $WholeList = $randomOrder->OrderStudents($studentsList);
        $list1 = $alphabeticalOrder->OrderStudents(array_slice($WholeList, 0, 50));
        $list2 = $alphabeticalOrder->OrderStudents(array_slice($WholeList, 50, 5));
        return [$list1, $list2];
    }
}
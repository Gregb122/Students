<?php


namespace Gregb\Students\App;


class BDivision implements IDivisionStrategy
{

    public function DivideToLists(array $studentsList): array
    {
        function DivideToLists(array $studentsList): array
        {
            $byPointsOrder= new ByPointsOrder();
            $alphabeticalOrder = new AlphabeticalOrder();


            $WholeList = $byPointsOrder->OrderStudents($studentsList);
            $list1 = array_slice($WholeList, 0, 75);
            $list2 = $alphabeticalOrder->OrderStudents(array_slice($WholeList, 75));
            return [$list1, $list2];
        }
    }
}
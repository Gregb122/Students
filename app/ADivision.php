<?php


namespace Gregb\Students\App;


class ADivision implements IDivisionStrategy
{
    public function DivideToLists(array $studentsList): array
    {
        $order = new ApplicationTimeOrder();

        $WholeList = $order->OrderStudents($studentsList);
        $list1 = array_slice($WholeList, 0, 100);
        $list2 = array_slice($WholeList, 100, 10);
        $list3 = array_slice($WholeList, 110);
        return [$list1, $list2, $list3];
    }
}
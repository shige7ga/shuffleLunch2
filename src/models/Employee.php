<?php

class Employee extends DbModel
{
    public function fetchEmployees()
    {
        $sql = 'SELECT emp_no, emp_name FROM employees';
        return $this->fetchAll($sql);
    }

    public function getShuffleEmployees()
    {
        $groups = [];
        $employees = $this->fetchEmployees();
        shuffle($employees);
        if (count($employees) % 2 === 0) {
            $groups = array_chunk($employees, 2);
        } else {
            $groups = array_chunk($employees, 2);
            $groups[0] = array_merge($groups[0], array_pop($groups));
        }
        return $groups;
    }

}

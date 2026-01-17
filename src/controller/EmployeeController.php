<?php

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = $this->dbManager->getModel('Employee')->fetchEmployees();
        return $this->render([
            'pageTitle' => '社員登録',
            'formTitle' => '登録フォーム',
            'formButton' => '登録する',
            'employees' => $employees
        ]);
    }

    public function create()
    {
        $empNo = $_POST['empNo'];
        $empName = $_POST['empName'];
        $this->dbManager->getModel('Employee')->registerEmployee($empNo, $empName);
        $employees = $this->dbManager->getModel('Employee')->fetchEmployees();
        return $this->render([
            'pageTitle' => '社員登録',
            'formTitle' => '登録フォーム',
            'formButton' => '登録する',
            'employees' => $employees
        ], 'index');
    }
}

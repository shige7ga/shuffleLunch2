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
}

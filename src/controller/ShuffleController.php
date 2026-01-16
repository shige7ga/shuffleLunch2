<?php

class ShuffleController extends Controller
{
    protected function index()
    {
        return $this->render([
            'formTitle' => '操作一覧',
        ]);
    }
}

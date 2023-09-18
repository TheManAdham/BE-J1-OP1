<?php

class Homepage extends BaseController
{
    public function index()
    {
        // echo "test";exit();
        $data = [
            'title' => 'Homepage'
        ];
    
        $this->view('Homepage/index', $data);
    }
}
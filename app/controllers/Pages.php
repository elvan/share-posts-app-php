<?php
class Pages
{
    public function __construct()
    {
    }

    public function index()
    {
        echo 'INDEX';
    }

    public function about($id)
    {
        echo $id;
    }
}

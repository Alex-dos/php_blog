<?php

namespace App\Controller;


class BlogController
{

    public function index()
    {
        echo 'Je suis la homepage';
    }

    public function show(int $id)
    {
        echo 'Je suis le post ' . $id;
    }

    public function __construct()
    {
    }
}
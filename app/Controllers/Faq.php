<?php
// filepath: app/Controllers/Faq.php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        return view('faq');
    }
}
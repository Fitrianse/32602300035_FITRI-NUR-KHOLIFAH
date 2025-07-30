<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Halloworld extends BaseController
{
    public function index(): string
    {
        return view(name: 'halloworld');
    }
}

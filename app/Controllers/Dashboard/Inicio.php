<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
/**
 * Summary of HomeController
 */
class Inicio extends BaseController
{
    /**
     * Summary of index
     * @return string
     */
    public function index(): string
    {
        return view('Dashboard/Inicio');
    }
}

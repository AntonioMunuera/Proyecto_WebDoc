<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
/**
 * Summary of LibreriaController
 */
class Acercade extends BaseController
{
    /**
     * Summary of index
     * @return string
     */
    public function index(): string
    {
        return view('Dashboard/Acercade');
    }
}

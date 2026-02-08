<?php

namespace App\Http\Controllers;

use Poing\Earmark\Http\Controllers\Serial as Earmark;

class GeneratorController extends Controller
{
    public $earmark;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->earmark = new Earmark('HENRY', null, 20, 5000, null);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serials = $this->earmark->get(10);
        foreach ($serials as $serial) {
            echo $serial . PHP_EOL;
        }
    }
}

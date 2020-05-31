<?php

namespace App\Http\Controllers;

use Poing\Earmark\Http\Controllers\Serial as Earmark;
// use Poing\Earmark\Facades\EarMarkFacade as Earkmarked;

class GeneratorController extends Controller
{
    public $earmark;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->earmark = new Earmark('HENRY', null, 20, 5000, null);
    }

    public function index()
    {
        $serials = $this->earmark->get(10);
        foreach ($serials as $serial) {
            echo $serial . PHP_EOL;
        }
    }
}

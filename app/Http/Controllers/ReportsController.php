<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function tellerReport(){
        return view('report.teller');
    }

    public function busReport()
    {
        return view('report.bus');
    }

    public function routeReport()
    {
        return view();
    }

    public function earningReport()
    {
        return view();
    }

    public function busManifestReport()
    {
        return view();
    }
}

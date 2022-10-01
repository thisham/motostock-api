<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestMongoController extends Controller
{
    public function index()
    {
        $data = DB::connection("mongodb")->table('test')->get();
        echo json_encode($data);
    }
}

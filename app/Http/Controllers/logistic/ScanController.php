<?php

namespace App\Http\Controllers\logistic;

use Illuminate\Http\Request;
use App\Models\logistic\Material;
use App\Http\Controllers\Controller;

class ScanController extends Controller
{
    public function receivingScan(){
        return view('logistic.receiving.chooseScan');
    }

    public function scanInformationmaterial(){
        return view('logistic.receiving.scanInfo');
    }

    public function StockIn(){
        return view('logistic.receiving.scanStock');
    }

    
}

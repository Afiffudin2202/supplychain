<?php

namespace App\Http\Controllers\planner;

use PDF;
use App\Exports\MpsExport;
use App\Models\planner\Mps;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\planner\GPADry;
use App\Models\planner\WorkcenterDryType;
use Maatwebsite\Excel\Facades\Excel;

class GPADryController extends Controller
{
    public function index()
    {
        $dataMps = Mps::all();
        return view('planner.gpa.indexgpadry', compact('dataMps'));
    }

    public function gpaDryDetail(String $id_wo):View
    {
        $dataMps = Mps::where('id_wo', $id_wo)->first();
        $dataGpa = GPADry::where('id_wo', $id_wo)->get();
        return view('planner.gpa.detail-gpa-dry', compact('dataMps', 'dataGpa'));
    }

    public function exportToExcel()
    {
        $dataMps = Mps::select('id', 'id_wo', 'project', 'production_line', 'kva', 'jenis', 'qty_trafo', 'lead_time', 'deadline')->get(); // Ambil data Mps dari database

        return Excel::download(new MpsExport($dataMps), 'GPA.xlsx');
    }

    public function exportToPdf()
    {
        $dataMps = Mps::select('id', 'id_wo', 'production_line', 'kva', 'qty_trafo', 'lead_time', 'deadline')->get(); // Ambil data Mps dari database
        $pdf = PDF::loadView('planner.gpa.view', ['dataMps' => $dataMps]);
        return $pdf->download('GPA.pdf');
    }

    public function exportToPdfDetail(Request $request, $id_wo)
    {
        $dataGpa = GPADry::where('id_wo', $id_wo)
        ->select('id', 'id_wo', 'production_line', 'kva', 'qty_trafo', 'lead_time', 'deadline', 'nama_workcenter')
        ->get();
        $pdf = PDF::loadView('planner.gpa.view-detail-gpa-dry', ['dataGpa' => $dataGpa]);
        return $pdf->download('DetailGPADry.pdf');
    }
}
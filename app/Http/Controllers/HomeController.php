<?php

namespace App\Http\Controllers;

use App\Exports\PengajuanExport;
use App\Imports\PengajuanImport;
use App\Imports\DetailImport;
use App\Models\Pengajuan;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\detail;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{

    public function dashboard (){
        return view('dashboard');
    }

    public function index(){

        $data = Pengajuan::get();

        return view('index',compact('data'));
    }
    public function search(Request $request)
    {
        $tanggal = $request->tanggal;

        $data = Pengajuan::whereDate('tanggal_pengajuan', $tanggal)->get();

        return view('index', compact('data'));
    }
    public function tambah_pengajuan(){

        return view('tambah-pengajuan');
    }

    public function simpan(Request $request){
        $validator = FacadesValidator::make($request->all(), [
            'nomor_pengajuan' => 'required',
            'tanggal_pengajuan' => 'required|date',
            'keterangan' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'nomor_pengajuan' => $request->nomor_pengajuan,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'keterangan' => $request->keterangan,
        ];

        Pengajuan::create($data);

        return redirect()->route('admin.index');
    }

    public function detail(Request $request,$id){
        $data =Pengajuan::find($id);

        if($request->get('export') == 'pdf'){
            $pdf = Pdf::loadView('pdf.detail', ['data'=> $data]);
            return $pdf->stream('Pengajuan Detail.pdf');

        }

        return view('detail' ,compact('data'));
    }


    public function edit(Request $request,$id){
        $data =Pengajuan::find($id);


        return view('edit' ,compact('data'));
    }


    public function update(Request $request,$id){
        $validator = FacadesValidator::make($request->all(), [
            'nomor_pengajuan' => 'required',
            'tanggal_pengajuan' => 'required|date',
            'keterangan' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'nomor_pengajuan' => $request->nomor_pengajuan,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'keterangan' => $request->keterangan,
        ];

        Pengajuan::create($data);

        return redirect()->route('admin.index');
    }


    public function  delete(Request $request,$id){
        $data = Pengajuan::find($id);

        if($data){
            $data->forceDelete();
        }
        return redirect()->route('admin.index');
    }
public function show($id)
{
    $data = Pengajuan::with('detail')->findOrFail($id);
    return view('detail', compact('data'));
}

public function import(Request $request)
{
    return view('import-excel');
}

public function import_proses(Request $request)
{


    Excel::import(new PengajuanImport(),$request->file('file'));

    return redirect()->back()->with('success','berhasil ditambahkan');
}



public function PengajuanExport($id)
{
    return Excel::download(new PengajuanExport($id), 'pengajuan.xlsx');


}










}

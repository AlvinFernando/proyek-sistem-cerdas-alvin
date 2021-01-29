<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\XSiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Xsiswa;


class XsiswaController extends Controller
{
    //mengambil dari folder xsiswa.file index di folder view
    public function index(Request $request){
        if($request->has('cari')){
            $data_xsiswa = \App\Xsiswa::where('nm_xsiswa','LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_xsiswa = \App\Xsiswa::all();// variabel data xsiswa harus dilempar ke view
        }
        
        return view('xsiswa.index',['data_xsiswa' => $data_xsiswa]);
    }

    public function create(Request $request){
        //dd($request->all());
        $this->validate($request, [
            'nm_xsiswa' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'avatar' => 'mimes:jpg,png'
        ]);


        //insert ke table user
        $user = new \App\User;
        $user->role = 'xsiswa';
        $user->name = $request->nm_xsiswa;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();


        //insert ke table siswa
        $request->request->add([ 'kd_xsiswa' => $user->id ]);
        $xsiswa = Xsiswa::create($request->all());
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $xsiswa->avatar = $request->file('avatar')->getClientOriginalName();
            $xsiswa->save(); 
        }
        return redirect('xsiswa')->with('sukses','Data Berhasil Diinputkan !!');
    }

    public function edit(Xsiswa $xsiswa){
        return view('xsiswa/edit',['xsiswa' => $xsiswa]);
    }

    public function update(Request $request, Xsiswa $xsiswa){
        //dd($request->all());
        $xsiswa -> update($request->all());
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $xsiswa->avatar = $request->file('avatar')->getClientOriginalName();
            $xsiswa->save(); 
        }
        return redirect('xsiswa')->with('sukses','Data Berhasil Diubah !!');
    }

    public function delete(Xsiswa $xsiswa){
        $xsiswa -> delete($xsiswa);
        return redirect('xsiswa')->with('sukses','Data Berhasil Dihapus !!');
    }

    public function profile(Xsiswa $xsiswa){
        $xsiswa = \App\Xsiswa::find($id);
        $xmatapelajaran = \App\Xmapel::all();
    }

    public function exportExcel() {
        return Excel::download(new XSiswaExport, 'xsiswa.xlsx');
    }

    public function exportPDF() {
        $xsiswa = Xsiswa::all();
        $pdf = PDF::loadView('export.xsiswapdf', ['xsiswa' => $xsiswa]); 
        return $pdf->download('xsiswa.pdf');
    }

    public function xprofilsaya(){
        return view('xsiswa.xprofilsaya');
    }
}
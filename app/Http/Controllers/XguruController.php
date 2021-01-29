<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Xguru;


class XguruController extends Controller
{
    //mengambil dari folder xguru.file index di folder view
    public function index(Request $request){
        if($request->has('cari')){
            $data_xguru = \App\Xguru::where('nm_xguru','LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_xguru = \App\Xguru::all();// variabel data xguru harus dilempar ke view
        }
        
        return view('xguru.index',['data_xguru' => $data_xguru]);
    }

    public function create(Request $request){
        //dd($request->all());
        $this->validate($request, [
            'nm_xguru' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'avatar' => 'mimes:jpg,png'
        ]);


        //insert ke table user
        $user = new \App\User;
        $user->role = 'xguru';
        $user->name = $request->nm_xguru;
        $user->email = $request->email;
        $user->password = bcrypt('sekolah');
        $user->remember_token = str_random(60);
        $user->save();


        //insert ke table guru
        $request->request->add([ 'kd_xguru' => $user->id ]);
        $xguru = Xguru::create($request->all());
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $xguru->avatar = $request->file('avatar')->getClientOriginalName();
            $xguru->save();
        }
        return redirect('xguru')->with('sukses','Data Berhasil Diinputkan !!');
    }

    public function edit(Xguru $xguru){
        return view('xguru/edit',['xguru' => $xguru]);
    }

    public function update(Request $request, Xguru $xguru){
        //dd($request->all());
        $xguru -> update($request->all());
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $xguru->avatar = $request->file('avatar')->getClientOriginalName();
            $xguru->save(); 
        }
        return redirect('xguru')->with('sukses','Data Berhasil Diubah !!');
    }

    public function delete(Xguru $xguru){
        $xguru -> delete($xguru);
        return redirect('xguru')->with('sukses','Data Berhasil Dihapus !!');
    }

    public function profile(Xguru $xguru){
        $xguru = Xguru::find($id);
    }

    public function exportExcel() {
        return Excel::download(new XguruExport, 'xguru.xlsx');
    }

    public function exportPDF() {
        $xguru = Xguru::all();
        $pdf = PDF::loadView('export.xgurupdf', ['xguru' => $xguru]); 
        return $pdf->download('xguru.pdf');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function pengelolakost(){

    $data = Kost::all();
    return view('admin/pengelolakost',compact('data'));
    }

    public function tambahkost(){
        return view('admin/tambahkost');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        $data = Kost::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();

        return redirect('admin/pengelolakost');
    }

}

    public function editkost($id){
        
        $data=Kost::find($id);
        //dd($data);
        return view('/admin/editkost',compact('data'));
    }

    public function updatedata(Request $request, $id){
        
        $data=Kost::find($id);
        $data->update($request->all());
        return redirect('admin/pengelolakost')->with('success','data berhasil di tambahkan');
    }

    public function delete($id){
        $data=Kost::find($id);
        $data->delete();
        return redirect('admin/pengelolakost');
    }

    public function homepage()
{
    $data = Kost::where('unggulan', 'ya')->get();
    return view('user.homepage', compact('data'));
}

    public function daftarkost()
    {
        $data = kost::all();
        //dd($kosts); 
        return view('user/daftarkost', compact('data'));
    }


    public function detailkost($id)
    {
        $data = kost::find($id);
        //dd($data); 
        return view('user/detailkost', compact('data'));
    }
}


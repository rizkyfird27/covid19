<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahsakitController extends Controller
{
    public function index()
    {
        $data['rumahsakit'] = \App\rumahsakit::orderBy('id')->get();
        return view('rumahsakit', $data);
    }
    public function create()
    {
        return view('formrumahsakit');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        //unset($input['_token']);
        //$status = \DB::table('t_rumahsakit')->insert($input);

        //$status = \App\rumahsakit::create($input);
        $rumahsakit= new \App\rumahsakit;
        $rumahsakit->nama = $input['nama'];
        $rumahsakit->provinsi = $input['provinsi'];
        $rumahsakit->alamat = $input['alamat'];
        $rumahsakit->telp = $input['telp'];
        $rumahsakit->fax = $input['fax'];
        $status = $rumahsakit->save();

        if($status){
            return redirect('/rumahsakit')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/rumahsakit/create')->with('error','Data gagal ditambahkan');
        }
    }
    public function edit(Request $request, $id)
    {
        $data['rumahsakit'] = \DB::table('t_rumahsakit')->find($id);
        return view('formrumahsakit',$data);
    }
    public function update(Request $request, $id)
    {
        $rule = [
            'nama' => 'required|string',
            'provinsi' => 'required',
            'alamat' => 'required|string',
            'telp' => 'required|string',
            'fax' =>'required|string',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        //unset($input['_token']);
        //unset($input['_method']);

        //$status = \DB::table('t_rumahsakit')->where('id',$id)->update($input);

        $rumahsakit = \App\rumahsakit::find($id);
        //$status = $rumahsakit->update($input);
        $rumahsakit->nama = $input['nama'];
        $rumahsakit->provinsi = $input['provinsi'];
        $rumahsakit->alamat = $input['alamat'];
        $rumahsakit->telp = $input['telp'];
        $rumahsakit->fax = $input['fax'];
        $status = $rumahsakit->update();

        if ($status) {
            return redirect('/rumahsakit')->with('success', 'Data berhasil diubah');
        } else {
            return redirect('/rumahsakit/create')->with('error', 'Data gagal diubah');
        }
    }
    public function destroy(Request $request, $id)
    {
        $t_rumahsakit = \App\rumahsakit::find($id);

        $status = \DB::table('t_rumahsakit')->where('id', $id)->delete();

        if ($status) {
            return redirect('/rumahsakit')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/rumahsakit/create')->with('error', 'Data gagal dihapus');
        }
    }
}

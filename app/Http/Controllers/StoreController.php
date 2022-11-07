<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\JsonSerializable;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class StoreController extends Controller
{
    public $alamat = array();
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        $validatedData = $request;

        return dd($validatedData);

        Store::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! please login');
        // $request->session()->flash('sucess', 'Registration successfull! please login');

        return redirect('/')->with('sucess', 'Registration successfull! please login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreRequest  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStoreRequest $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }

    public function tampilan() {
        // global $alamat;
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        $data = json_decode($response, true);
        return view('registerToko.index',[
            'data' => $data,
        ]);
    }

    public function provinsi(Request $request) {
        // global $alamat;
        $data['nameToko'] = $request['nameToko'];
        $data['telp'] = $request['telp']; 
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        $provinces = json_decode($response, true);
        return view('registerToko.alamat.provinces',[
            'provinces' => $provinces,
            'data' => $data,
        ]);
    }

    public function kota(Request $request) {
        $data['nameToko'] = $request['nameToko'];
        $data['telp'] = $request['telp']; 
        // $alamat = [];
        $urltmp = $request;
        $url = $urltmp['provice'];
        // $responses = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        // $isiresponses = json_decode($responses, true);
        // foreach ($isiresponses as $respons) {
        //     if ($respons['id'] == $url) {
        //         $coba = $respons['name'];
        //         $alamat['provinsi'] = $coba;
        //         $alamat['id_provinsi'] = $url;
        //     }
        // }
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regencies/'.$url.'.json');
        $states = json_decode($response, true);
        return view('registerToko.alamat.states',[
            'states' => $states,
            'data' => $data,
            // 'alamat' => $alamat
        ]);
    }

    public function kecamatan(Request $request) {
        $data['nameToko'] = $request['nameToko'];
        $data['telp'] = $request['telp']; 
        $urltmp = $request;
        // $alamat = [];
        // $alamat['id_provinsi'] = $request['id_provinsi'];
        // $alamat['provinsi'] = $request['provinsi'];
        // $query = $request['id_provinsi'];
        $url = $urltmp['district'];
        // $responses = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regencies/'.$alamat['id_provinsi'].'.json');
        // $isiresponses = json_decode($responses, true);
        // foreach ($isiresponses as $respons) {
        //     if ($respons['id'] == $url) {
        //         $coba = $respons['name'];
        //         $alamat['kota'] = $coba;
        //         $alamat['id_kota'] = $url;
        //     }
        // }
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/districts/'.$url.'.json');
        $districts = json_decode($response, true);
        return view('registerToko.alamat.districts',[
            'districts' => $districts,
            'data' => $data,
            // 'alamat' => $alamat
        ]);
    }

    public function desa(Request $request) {
        $data['nameToko'] = $request['nameToko'];
        $data['telp'] = $request['telp']; 
        $urltmp = $request;
        // $alamat = [];
        // $alamat['id_provinsi'] = $request['id_provinsi'];
        // $alamat['provinsi'] = $request['provinsi'];
        // $alamat['kota'] = $request['id_kota'];
        // $alamat['id_kota'] = $request['kota'];
        // $alamat['kecamatan'] = $request['id_kota'];
        // $alamat['id_kecamatan'] = $request['kota'];
        $url = $urltmp['village'];
        // $responses = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/districts/'.$alamat['id_kota'].'.json');
        // $isiresponses = json_decode($responses, true);
        // foreach ($isiresponses as $respons) {
        //     if ($respons['id'] == $url) {
        //         $coba = $respons['name'];
        //         $alamat['kecamatan'] = $coba;
        //         $alamat['id_kecamatan'] = $url;
        //     }
        // }
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/villages/'.$url.'.json');
        $data['id_desa'] = $url;
        $villages = json_decode($response, true);
        return view('registerToko.alamat.villages',[
            'villages' => $villages,
            'data' => $data,
            // 'alamat' => $alamat,
        ]);
    }

    public function konfirmasi(Request $request) {
        $datatmp = $request;
        $data['village'] = $request['village'];
        $data['nameToko'] = $datatmp['nameToko'];
        // $data['id_desa'] = $request['id_desa'];
        $data['telp'] = $datatmp['telp'];

        $desatmp = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/village/'.$data['village'].'.json');

        $desa = json_decode($desatmp, true);
        $datadesa['id'] = $desa['id'];
        $datadesa['id_kecamatan'] = $desa['district_id'];
        $datadesa['nama'] = $desa['name'];
        // return dd($datadesa);
        // die;
        $kecamatantmp = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/district/'.$datadesa['id_kecamatan'].'.json');
        $kecamatan = json_decode($kecamatantmp, true);
        $datakecamatan['id'] = $kecamatan['id'];
        $datakecamatan['id_kota'] = $kecamatan['regency_id'];
        $datakecamatan['nama'] = $kecamatan['name'];

        $kotatmp = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regency/'.$datakecamatan['id_kota'].'.json');
        $kota = json_decode($kotatmp, true);
        $datakota['id'] = $kota['id'];
        $datakota['id_provinsi'] = $kota['province_id'];
        $datakota['nama'] = $kota['name'];

        $provinsitmp = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/province/'.$datakota['id_provinsi'].'.json');
        $provinsi = json_decode($provinsitmp, true);
        $dataprovinsi['id'] = $provinsi['id'];
        $dataprovinsi['nama'] = $provinsi['name'];

        $data['desa'] = $datadesa['nama'];
        $data['kecamatan'] = $datakecamatan['nama'];
        $data['kota'] = $datakota['nama'];
        $data['provinsi'] = $dataprovinsi['nama'];

        // return dd($data);
        // die;

        return view('registerToko.konfirmasi', [
            'data' => $data,
        ]);
    }
}

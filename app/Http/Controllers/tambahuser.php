<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Stmt\Foreach_;

class tambahuser extends Controller
{
    public function home() {
        $data = DB::table('anggota')->get();
        return view('upload',[
            "data" => count($data)
        ]);
    }
    public function tambah(Request $request) {

        DB::table('anggota')->insert([
            'fotoformal' => $request['link'],
            'fotoselfie' => $request['link2'],
            'kelompok' => $request['kelompok'],
            "nama" => $request['nama'],
            'nim' => $request['nim'],
            'alamat' => $request['alamat'],
            'no' => $request['nohp'],
            'ttl' => $request['ttl']
        ]);

        return "Data Berhasil Ditambahkan";
    }

    public function lihat(){
        $data = DB::table('anggota')->get();
        return view('lihat',[
            "Data" => $data
        ]);
    }

    public function datacuy() {
        $data = DB::table('anggota')->get();
        return $data;
    }

    public function admin(){
        $data = DB::table('anggota')->orderBy('kelompok')->get();
        return view('admin', [
            "Data" => $data
        ]);
    }
    public function delete (Request $request) {
        DB::table('anggota')->where('id', '=' , $request['nim'])->delete();
        return redirect('/admin');
    }
    public function download(){
        $data = DB::table('anggota')->get();
        $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES);

        return response()->json($data, 200, [], JSON_UNESCAPED_SLASHES)
    ->header('Content-Type', 'application/json')
    ->header('Content-Disposition', 'attachment; filename="data.json"');
    }

    function apiGet(Request $request) {
        $data = DB::table('anggota')->where('nim', '=', $request['nim'])->get();
        return $data;
    }
    function updateWeb (Request $request) {
        if ($request['website']){
            $data = DB::table('anggota')->where("nim" , "=" ,$request['nimid'])->update([
                "web" => $request["website"]
            ]);

            return redirect('/update')->with("suc","success");
        }
    }

    function refor() {
        function getFileName($link, $name) {
            $fileName = basename($link);
            return "https://storageangkatan.netlify.app/src/{$name}/{$fileName}";
        }
        $datas = DB::table('anggota')->get();

        foreach ($datas as $data) {
            DB::table('anggota')->where('id','=',$data->id)->update([
                "fotoformal" => getFileName($data->fotoformal,'formal'),
                "fotoselfie" => getFileName($data->fotoselfie,'selfie'),
            ]);
        }

        return "berhasil";
    }
}

<?php
 
namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Penilaian;
use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.halaman.index',compact('anggotas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tampilhasil(){
        return view('tampilanui.pengumuman', [
            'hasil' => Hasil::get()
        ]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = DB::table('anggotas')->get();
        return view('dashboard.penilaian.create', [
            'anggota' => $anggota
        ]);
    }
    public function daftar()
    {
        return view('pendaftaran');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'berkas_lengkap' => 'required',
            'nilai_tes' => 'required',
            'nilai_interview' => 'required',
            'ipk' => 'required',
            'rangkap_jabatan' => 'required'
        ]);
   
        $input = $request->all();
     
        Penilaian::create($input);
      
        return redirect('/penilaian')->with('success','Anggota created successfully.');
    }

    public function storeanggota(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
     
        Anggota::create($input);
      
        return redirect('/beranda')->with('success','Anda berhasil mendaftar!');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
  
        return view('show',compact('anggota'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaian $penilaian)
    {
        return view('penilaian.edit',compact('penilaian'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        $anggota;
        $request->validate([
            'nim' => 'required',
            'berkas_lengkap' => 'required',
            'nilai_tes' => 'required',
            'nilai_interview' => 'required',
            'ipk' => 'required',
            'rangkap_jabatan' => 'required'
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
           
        $anggota->update($input);
     
        return redirect()->route('index')
                        ->with('success','Anggota updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
      
        return redirect()->route('index')
                        ->with('success','Anggota deleted successfully');
    }
}
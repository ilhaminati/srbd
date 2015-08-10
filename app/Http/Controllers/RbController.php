<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Rb;
use Illuminate\Http\Request;

class RbController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return	view('rb/index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function view()
	{
        $rb = Rb::all();
        return view('rb/view')->with('rb', $rb);
	}

    public function dashboard()
    {
        return view('rb/dashboard');
    }

	public function saveData(Request $request)
	{
		$rb = new	Rb();
		$rb->tanggal = $request->input('tanggal');
		$rb->desa_kel = $request->input('desa_kel');
		$rb->kec = $request->input('kec');
        $rb->kab_kot = $request->input('kab_kot');
        $rb->provinsi = $request->input('provinsi');
        $rb->no_lembar_peta = $request->input('no_lembar_peta');
        $rb->nama_lembar_peta = $request->input('nama_lembar_peta');
        $rb->jenis_unsur = $request->input('jenis_unsur');
        $rb->kode_unsur = $request->input('kode_unsur');
        $rb->nama_gen = $request->input('nama_gen');
        $rb->sub_nama_gen = $request->input('sub_nama_gen');
        $rb->asal_bahasa = $request->input('asal_bahasa');
        $rb->arti_nama = $request->input('arti_nama');
        $rb->sejarah_nama = $request->input('sejarah_nama');
        $rb->narasumber1 = $request->input('narasumber1');
        $rb->narasumber2 = $request->input('narasumber2');
        $rb->bt1 = $request->input('bt1');
        $rb->ls1 = $request->input('ls1');
        $rb->bt2 = $request->input('bt2');
        $rb->ls2 = $request->input('ls2');
        $rb->panjang = $request->input('panjang');
        $rb->luas = $request->input('luas');
        $rb->tinggi = $request->input('tinggi');
        $rb->petugas1 = $request->input('petugas1');
        $rb->petugas2 = $request->input('petugas2');
        $rb->tanggal2 = $request->input('tanggal2');
        $rb->jabatan = $request->input('jabatan');
        $rb->kecamatan = $request->input('kecamatan');
        $rb->nama_pejabat = $request->input('nama_pejabat');
        $rb->nip = $request->input('nip');
        $rb->save();
        Session::flash('message', 'Data Berhasil Ditambahkan');
        return redirect('/dashboard');
	}

}

<?php namespace App\Http\Controllers;
use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Carbon\Carbon;
class PesananController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex() {
		$p = Pesanan::all();
		return view('pesanan.index')->withpesanans($p);
	}

	public function getView($id) {
		$p = Pesanan::find($id);
		return view('pesanan.view')->withpesanan($p);
	}

	public function getCreate()
	{
		$pesanan = new Pesanan;
		return view('pesanan.create')->withpesanan($pesanan);
	}

	public function postCreate(Request $request) {
		$r = $request->all();
		// return response($r);
		$pesanan = new Pesanan;
		$pesanan->fill($r);
		$pesanan->save();

		return Redirect::to('pesanan')->withalert('pesanan berhasil ditambahkan');
	}

	public function getUpdate($id) {
		$pesanan = Pesanan::find($id);
		return view('pesanan.create')->withpesanan($pesanan);
	}

	public function postUpdate($id, Request $request) {
		$r = $request->all();
		$pesanan = Pesanan::find($id);
		$pesanan->paid = false;
		$pesanan->delivered = false;
		$pesanan->done = false;
		$pesanan->fill($r);
		$pesanan->save();
		return Redirect::to('pesanan')->withalert('pesanan berhasil diubah');
	}

	public function getDelete($id) {
		$pesanan = Pesanan::find($id);
		$pesanan->delete();
		return Redirect::to('pesanan')->withalert('pesanan berhasil dihapus');
	}

	public function getSearch(Request $request) {
		$k = $request->all()['keyword'];
		if ($k == null) $k = '';
		$key = '%'.$k.'%';
		// $p = Pemesan::wherenama('LIKE', '%'.$k.'%')->get();
		$p = Pemesan::whereHas('user', function($q) use ($key) {
			$q->where('nama', 'LIKE', $key);
		})->orWhere('id','LIKE', $key)
		  ->orWhere('nama','LIKE', $key)
		  ->orWhere('alamat', 'LIKE', $key)
		  ->orWhere('telepon', 'LIKE', $key)
		  ->get();
		return view('pesanan.index')->withpesanans($p);
		return response('ok');
	}
}

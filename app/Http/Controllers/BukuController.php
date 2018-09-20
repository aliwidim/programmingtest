<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\BukuRequest;

use App\Buku;

use Session;


class BukuController extends Controller
{
    protected $request;

    public function __construct(Request $req) {
        $this->request = $req;
    }
	
	public function index() {
        //$siswa_list = Siswa::all()->sortBy('tanggal_lahir');
        $buku_list = Buku::orderBy('title')->paginate(4);
        $jumlah_buku = Buku::count();
        $data = ['buku_list'=>$buku_list,'jumlah_buku'=>$jumlah_buku];
        return view('buku.index',$data);
    }
	public function show(Buku $buku) {
		return view('buku.show',compact('buku'));
	}
	public function create() {
       return view('buku.create');
    }
	public function store(BukuRequest $request) {
        $input = $request->all();
	
        $buku = Buku::create($input);
		
		Session::flash('flash_message', 'Sukses');
		
        return redirect('buku');
    }
	public function edit(Buku $buku) {
		return view('buku.edit',compact('buku'));
	}
	public function update(Buku $buku, BukuRequest $request) {
        $input = $request->all();
    
        $buku->update($input);
		
		Session::flash('flash_message', 'Updated');

        return redirect('buku');
    }
	public function destroy(Buku $buku) {
        $buku->delete();
		
		Session::flash('flash_message','Deleted');
		Session::flash('important',true);
		
        return redirect('buku');
    }
}

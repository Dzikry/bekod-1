<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\post; 
use Input;

use Illuminate\Http\Request;

class ArtikelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function home()
	{
		return view('artikel.home');
	}

	public function getartikel($slug)
	{
		$data = array(post::where('slug', $slug)->first());
		return view('artikel.list')->with('data',$data);
	}

	public function postartikel()
	{

		return view('artikel.add');
	}

	public function saveartikel(Request $request)
	{
		$post = new post;	
		$post->author = Input::get('author');
		$post->judul = Input::get('judul');
		$post->isi = Input::get('message');
		$post->slug = str_slug(Input::get('judul'));

		if(Input::hasFile('gambar')){
			$sampul = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();

			Input::file('gambar')->move(storage_path(),$sampul);
			$post->sampul = $sampul;
		}

		
		$post->save();
		
		return redirect(url('artikel/openssl_pkey_get_details(key)'));
	}
	

	public function editartikel()
	{

	}
	public function deleteartikel()
	{

	}

}



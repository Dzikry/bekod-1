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
		$artikel = \DB::table('posts')->get();
		return view('artikel.home')->with('artikel',$artikel);
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

	public function saveartikel()
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
		
		return redirect(url('/artikel'));
	}
	

	public function editartikel($id)
	{
		$data = \DB::table('posts')->where('id',$id)->get();

		// dd($data);

		return view('artikel.edit')->with('data',$data);
		
	}

	public function update()
	{

		if(Input::hasFile('gambar')){
			$sampul = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$sampul);
			$dataUpdate = array(
				'author' => Input::get('author'), 
				'judul' => Input::get('judul'), 
				'isi' => Input::get('isi'), 
				'slug' => Input::get('judul'),
				'sampul' => $sampul
			);
		}
		else{
			$dataUpdate = array(
				'author' => Input::get('author'), 
				'judul' => Input::get('judul'), 
				'isi' => Input::get('isi'), 
				'slug' => Input::get('judul')
			);	
		}

		\DB::table('posts')->where('id',Input::get('id'))->update($dataUpdate);
		
		return redirect(url('/artikel'));
	}

	public function deleteartikel($id)
	{
		\DB::table('posts')->where('id',$id)->delete();

		return redirect(url('artikel'));
	}

}



<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\postadmin;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
=======

use Illuminate\Http\Request;
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function registration()
	{
		return view('auth.register');
	}

	public function login()
	{
		return view('auth.login');
	}

=======
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
	public function index()
	{
		return view('admin.home');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function regsave()
		{
			$post = new admin;
			$post->id = Input::get('id');
			$post->username = Input::get('username');
			$post->password = Input::get('password');
			$post->save();
			return redirect(url('admin'));
		}

		public function store()
		{
			$post = new postadmin;
			$post->id = Input::get('id');
			$post->judul = Input::get('judul');
			$post->isi = Input::get('isi');

			if(Input::hasfile('foto'))
			{
				$foto = date("YmdHis")
				."."
				.Input::file('foto')->getClientOriginalExtension();

				Input::file('foto')->move(storage_path(),$foto);
				$post->foto = $foto;
			}

			$post->save();

			return redirect(url('admin/artikel'));
		}
=======
	public function store()
	{
		$post = new postadmin;
		$post->id = Input::get('id');
		$post->judul = Input::get('judul');
		$post->isi = Input::get('isi');

		if(Input::hasfile('foto')){
			$foto = date("YmdHis")
			.uniqid()
			."."
			.Input::file('foto')->getClientOriginalExtension();

			Input::file('foto')->move(storage_path(),$foto);
			$post->foto = $foto;
		}

		$post->save();

		return redirect(url('admin.add'));
	}
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function show()
	{
		$data = array('data'=>postadmin::all());
		return view('admin.all')->with($data);
=======
	public function show($id)
	{
		//
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
<<<<<<< HEAD
		$data = array('data'=>postadmin::find($id));
		return view('admin.edit')->with($data);
=======
		//
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function update()
	{
		$post = postadmin::find(Input::get('id'));
		$post->judul = Input::get('judul');
		$post->isi = Input::get('isi');
		if(Input::hasfile('foto')){
			$sampul = date("YmdHis")
			.uniqid()
			."."
			.Input::file('foto')->getClientOriginalExtension();

			Input::file('foto')->move(storage_path(),$foto);
			$post->foto = $foto;
		}

		$post->save();

		return redirect(url('admin/artikel'));
=======
	public function update($id)
	{
		//
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
<<<<<<< HEAD
		$post = postadmin::where('id', $id)->first();
		$post->delete();
		return redirect(url('admin/artikel'));
=======
		//
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
	}

}

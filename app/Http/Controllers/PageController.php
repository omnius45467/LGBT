<?php namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return view('pages.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function form()
	{
		return view('pages.form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('pages.contact');
	}

}

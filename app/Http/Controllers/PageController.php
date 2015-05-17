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
	public function chat()
	{
		$posts = Post::all();
		return view('pages.chat', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function about()
	{
		$posts = Post::all();
		return view('pages.about', compact('posts'));
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

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function faq()
	{
		return view('pages.faq');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function resources()
	{
		return view('pages.resources');
	}

}

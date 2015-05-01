<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class WelcomeController extends Controller {

	private $category;

	public function __construct(Category $category)
	{
		$this->middleware('guest');

        $this->category = $category;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

    public function exemplo()
    {
        $categories = $this->category->all();
        return view('exemplo', compact('categories'));
    }

}

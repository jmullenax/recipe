<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
	
	public function index(Request $request = NULL) {

		$this->data['search_string'] = '';

		if($request->input('submit_form')) {
			$this->data['search_string'] = $request->input('search_string');
		}


		return view('home/index', $this->data);
	}

}
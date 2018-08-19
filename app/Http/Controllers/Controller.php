<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Author;
use App\Models\Editor;
use App\Models\Source;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function advanced_search_results(Request $request) {
    	$input = $request->all();

    	$sections = Section::where('title', 'like', '%' . $input['title'] . '%');
    	$sources = Source::where('name', 'like', '%' . $input['title'] . '%');

		if(isset($input['author_fname']))
		{
			$sections = $sections->whereHas('authors', function ($query) use($input){
							$query->where('author_first_name', 'like', '%' . $input['author_fname'] . '%');
						});

			$sources = $sources->whereHas('authors', function ($query) use($input){
							$query->where('author_first_name', 'like', '%' . $input['author_fname'] . '%');
						});
		}

		if(isset($input['author_lname']))
		{
			$sections = $sections->whereHas('authors', function ($query) use($input){
							$query->where('author_last_name', 'like', '%' . $input['author_lname'] . '%');
						});

			$sources = $sources->whereHas('authors', function ($query) use($input){
							$query->where('author_last_name', 'like', '%' . $input['author_lname'] . '%');
						});
		}

		if(isset($input['editor_fname']))
		{
			$sections = $sections->whereHas('editors', function ($query) use($input){
							$query->where('editor_first_name', 'like', '%' . $input['editor_fname'] . '%');
						});

			$sources = $sources->whereHas('editors', function ($query) use($input){
							$query->where('editor_first_name', 'like', '%' . $input['editor_fname'] . '%');
						});
		}

		if(isset($input['editor_lname']))
		{
			$sections = $sections->whereHas('editors', function ($query) use($input){
							$query->where('editor_last_name', 'like', '%' . $input['editor_lname'] . '%');
						});

			$sources = $sources->whereHas('editors', function ($query) use($input){
							$query->where('editor_last_name', 'like', '%' . $input['editor_lname'] . '%');
						});
		}

		if(isset($input['year_of_publication']))
		{
			$sections = $sections->whereHas('source', function ($query) use($input){
							$query->where('year', '=', $input['year_of_publication']);
						})->orWhereHas('source', function ($query) use($input){
							$query->where('original_y', '=', $input['year_of_publication']);
						});

			$sources = $sources->where('year', '=', $input['year_of_publication'])->orwhere('original_y', '=', $input['year_of_publication']);
		}

		if(isset($input['publisher']))
		{
			$sections = $sections->whereHas('source', function ($query) use($input){
							$query->whereHas('publishers', function($query) use($input){
								$query->where('publisher_name', 'like', '%' . $input['publisher'] . '%');
							});
						});

			$sources = $sources->whereHas('publishers', function ($query) use($input){
							$query->where('publisher_name', 'like', '%' . $input['publisher'] . '%');
						});
		}

		if($input['language'] != 'X')
		{
			$sections = $sections->whereHas('source', function ($query) use($input){
							$query->where('language', '=', $input['language']);
						});

			$sources = $sources->where('language', '=', $input['language']);
		}

    	$sections = $sections->get();
    	$sources = $sources->get();	

    	return view('results', ['sections' => $sections, 'sources' => $sources]);	
    }
}

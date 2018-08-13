<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Author;
	use App\Models\Editor;
	use App\Models\Translator;
	use App\Models\Publisher;


	class Source extends Model {
		protected $table = 'sources';

		    public function authors()
		    {
		        return $this->belongsToMany('App\Models\Author');
		    }

		    public function editors()
		    {
		    	return $this->belongsToMany('App\Model\Editor');
		    }

		    public function publishers()
		    {
		    	return $this->belongsToMany('App\Model\Publisher');
		    }

		    public function translators()
		    {
		    	return $this->belongsToMany('App\Model\Translator');
		    }
		
	}
?>
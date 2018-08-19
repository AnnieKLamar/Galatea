<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Author;
	use App\Models\Editor;
	use App\Models\Translator;


	class Section extends Model {
		protected $table = 'sections';

		    public function authors()
		    {
		        return $this->belongsToMany('App\Models\Author');
		    }

		    public function editors()
		    {
		    	return $this->belongsToMany('App\Models\Editor');
		    }

		    public function translators()
		    {
		    	return $this->belongsToMany('App\Models\Translator');
		    }

		    public function source()
		    {
		    	return $this->belongsTo('App\Models\Source');
		    }
	}
?>
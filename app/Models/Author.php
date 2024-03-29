<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Section;
	use App\Models\Source;

	class Author extends Model {
		protected $table = 'authors';

		    public function sections()
		    {
		        return $this->belongsToMany('App\Models\Section');
		    }

		    public function sources()
		    {
		    	return $this->belongsToMany('App\Models\Source');
		    }
	}

?>


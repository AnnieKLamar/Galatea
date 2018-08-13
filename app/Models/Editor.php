<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Section;
	use App\Models\Source;

	class Editor extends Model {
		protected $table = 'editors';		    

		    public function sources()
		    {
		    	return $this->hasMany('App\Models\Source');
		    }

		    public function sections()
		    {
		    	return $this->hasMany('App\Models\Section');
		    }
		
	}
?>
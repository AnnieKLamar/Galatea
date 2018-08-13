<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Section;
	use App\Models\Source;

	class Translator extends Model {
		protected $table = 'translators';

		    public function sections()
		    {
		        return $this->hasMany('App\Models\Section');
		    }

		    public function sources()
		    {
		    	return $this->hasMany('App\Models\Source');
		    }
		
	}
?>
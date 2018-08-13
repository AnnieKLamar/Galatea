<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Source;

	class Publisher extends Model {
		protected $table = 'publishers';		    

		    public function sources()
		    {
		    	return $this->hasMany('App\Models\Source');
		    }
		
	}
?>
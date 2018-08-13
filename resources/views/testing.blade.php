<?php
	use App\Models\Author;
	use App\Models\Section;

	$brett = Author::where('author_first_name', 'Brett M.')->first();

	foreach($brett->sections()->get() as $section)
	{
		echo $section->title;
		echo "<br>";
	}

?>
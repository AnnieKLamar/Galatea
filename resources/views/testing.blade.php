<?php
echo "HIIIIII";

use App\Models\Author;
echo "BBBYYYEEE";

$authors = Author::all();
foreach ($authors as $author) {
	echo $author->author_first_name;
}
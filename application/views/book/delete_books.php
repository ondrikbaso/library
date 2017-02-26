<h1>Delete Books</h1>
<TABLE BORDER="1">
	<TR><TH>Name</TH><TH>Author</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<tr><td>'.$row['name'].'</td>';
		echo '<td>'.$row['author'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('book/remove_books').'/'.
		$row['id_books'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>
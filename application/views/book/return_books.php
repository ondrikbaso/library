<h1>Return Books</h1>
<TABLE BORDER="1">
	<TR><TH>Name</TH><TH>Author</TH><TH>Return selected</TH></TR>
	<?php
	foreach ($taken_books as $row) {
		echo '<tr><td>'.$row['name'].'</td>';
		echo '<td>'.$row['author'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('book/move2_books').'/'.
		$row['id_books'].'">Return</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>
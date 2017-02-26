<h1>Borrow Books</h1>
<TABLE BORDER="1">
	<TR><TH>Name</TH><TH>Author</TH><TH>Borrow selected</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<tr><td>'.$row['name'].'</td>';
		echo '<td>'.$row['author'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('book/move_books').'/'.
		$row['id_books'].'">Borrow</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>
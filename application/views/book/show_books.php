<h1>Book</h1>
<TABLE BORDER="1">
	<TR><TH>Name</TH><TH>Author</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<tr><td>'.$row['name'].'</td>';
		echo '<td>'.$row['author'].'</td></tr>';
	}
	?>
</TABLE>

<h1>Update books</h1>
<FORM method="POST" action="<?php echo site_url('book/update_books'); ?>">
<TABLE>
	<TR><TH>Name</TH><TH>Author</TH></TR>
	<?php
	foreach ($books as $row) {
		echo '<input type="hidden" name=id[] value="'.$row['id_books'].'"/>';
		echo '<tr><td><input type="text" name="na[]" value="';
			echo $row['name'];
			echo '"/></td>';
		echo '<td><input type="text" name="au[]" value="';
			echo $row['author'];
			echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>
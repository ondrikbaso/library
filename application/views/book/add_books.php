<h1>Add new Book</h1>
<FORM action="<?php echo site_url('book/add_books'); ?>" method="POST">
<TABLE>
	<TR><TD>Name</TD><TD><input type="text" name="na" placeholder="Write a book name" required="" /></TD></TR>
	<TR><TD>Author</TD><TD><input type="text" name="au" placeholder="Write a author name" required="" /></TD></TR>
	<TR><TD></TD><TD><input type="submit" name="btnSave" value="Save"/></TD></TR>
</TABLE>
</FORM>

<?php
if (isset($test)) {
	if ($test)
		echo 'book added';
	else 
		echo 'Something went wrong';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Library Managment</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/mystyle.css">
</head>
<body>

<h1>Library Managment</h1>
<ul>
	<li><a href="<?php echo site_url('book/show_books');?>">Show books</a></li>
	<li><a href="<?php echo site_url('book/add_books');?>">Add book</a></li>
	<li><a href="<?php echo site_url('book/delete_books');?>">Delete book</a></li>
	<li><a href="<?php echo site_url('book/update_books');?>">Update book</a></li>
	<li><a href="<?php echo site_url('book/borrow_books');?>">Borrow book</a></li>
	<li><a href="<?php echo site_url('book/return_books');?>">Return book</a></li>
</ul>


<!DOCTYPE html>
<html>
<head>
<title>Library Managment</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/mystyle.css">
</head>
<body>

<h1>Library Managment</h1>
<ul>
	<li><a href="<?php echo site_url('Book/show_books');?>">Show books</a></li>
	<li><a href="<?php echo site_url('Book/add_books');?>">Add book</a></li>
	<li><a href="<?php echo site_url('Book/delete_books');?>">Delete book</a></li>
	<li><a href="<?php echo site_url('Book/update_books');?>">Update book</a></li>
	<li><a href="<?php echo site_url('Book/borrow_books');?>">Borrow book</a></li>
	<li><a href="<?php echo site_url('Book/return_books');?>">Return book</a></li>
</ul>


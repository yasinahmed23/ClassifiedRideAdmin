<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'db_config.php';

	$username=$_SESSION[user];
	
	//Save user input as variable	
	$blog_title = mysql_real_escape_string($_POST['blog_title']);
	$blog_text = mysql_real_escape_string($_POST['blog_text']);	
		
	$sel_member="SELECT member_id FROM members WHERE username='".$username."' ";

	$memIDResult=mysql_query($sel_member);
	$memID = mysql_fetch_row($memIDResult);
	foreach($memID as $id)
	{
		$member_id = $id;	
	}
	
	//Run query to Add blog to database	
	$add_blog = "
	INSERT INTO blog_posts (blog_title,blog_post,member_id,blog_author)
	VALUES ('$blog_title','$blog_text','$member_id','$username')
	";
		
	$result= mysql_query($add_blog);
	header( 'Location: /blog.php' ) ;	

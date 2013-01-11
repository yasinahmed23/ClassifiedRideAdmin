<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	//echo $user;

	
?>

<?php
if($_GET['LastBlog']) {
	$mysqlQuery = mysql_query('SELECT * FROM blog_posts WHERE id < "'.$_GET['LastBlog']. '" ORDER BY id DESC LIMIT 0,8');
	while ($row = mysql_fetch_array($sql)) 
	{
		$blog_id = $row['blog_id'];
		$date = $row['date_posted'];
		$title = $row['blog_title'];
		$content = $row['blog_post'];
		echo "<div class='PostedBlog' id='$id PostedBlog'>
		<center>$title <br />$content<br />$date<br /></center>
</div>";
	}
}
?>

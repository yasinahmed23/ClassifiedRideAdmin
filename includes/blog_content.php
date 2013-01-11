<!--Create a New Blog-->
<form action="new_blog.php" name="new_blog" id="new_blog">
	<input class="textfield" type="submit" id="new_blog" name="new_blog" value="Create a New Blog" />
</form>
<table cellpadding="5" cellspacing="0" border="1">
	<tr>
		<td align="center"><strong>Blog ID</strong></td>				
		<td align="center"><strong>DATE</strong></td>		
		<td align="center"><strong>TITLE</strong></td>
		<td align="center"><strong>CONTENT</strong></td>
	</tr>
<?php

//Display current user's 10 newest posts
$sql = mysql_query("SELECT *
FROM members m 
LEFT JOIN blog_posts b
ON m.member_id=b.member_id
WHERE username='".$user."'
ORDER BY date_posted DESC
LIMIT 0,10;
");

while ($row = mysql_fetch_array($sql)) 
{
$blog_id = $row['blog_id'];
$date = $row['date_posted'];
$title = $row['blog_title'];
$content = $row['blog_post'];

?>
	<tr>
		<td align="center"><?php echo $blog_id;?></td>				
		<td align="center"><?php echo $date;?></td>		
		<td align="center"><?php echo $title;?></td>
		<td align="center"><?php echo $content;?></td>
	</tr>
<?php } ?>
</table>

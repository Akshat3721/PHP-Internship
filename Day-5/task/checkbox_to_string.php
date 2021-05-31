<?php 
	$a = array("akshat", "reads", "book", "every", " day", 
			"kalp", "drinks", "tea", "after", "lunch",
			"he", "is", "walking", "on", "the road",
			"we", "will go", "for", "shopping", "tomorrow",
			"he", "is", "eating", "mango", 
			"they", "are", "running"); 
?>
<form method="post">
Words :
<?php
	foreach ($a as $value)
		{
			echo "$value<input type='checkbox' name='cbox[]'' value='$value'>&nbsp;&nbsp;&nbsp;";
		}
?>
<input type="submit">
</form>
<?php
if($_POST)
{
$check = $_POST['cbox'];
$string = implode(" ", $check);
echo $string;
}
?>
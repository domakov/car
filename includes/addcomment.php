<?
	if (isset($_POST['add_comment'])) {

		$text_comment=$_POST['text_comment'];
		$news_id=$_POST['news_id'];
		if (empty($text_comment)) {
			$error="Комментарий бос болмау керек!!!";
		}
		else{
			if(addComment($text_comment,$news_id,9)){
				$error="Комментарий сәтті қосылды";
				echo"<meta http-equiv='refresh' content='0;URL='";
			}
			else{
				$error="Қате орын алды";
			}
		}

		# code...
	}

?>
<form method="POST" action="#">
	<?
		if($error) echo $error;
	?>
	<input type="hidden" name="news_id" value="<?=$id?>">
	<div class="clear"></div>
	<label>Comment: </label>
	<textarea cols="20" rows="20" name ="text_comment"></textarea>
	<input type="submit" name="add_comment" value="submit" class="submit"/>
</form>
<?
	if (isset($_POST['add_comment'])) {

		$sa_comments=$_POST['sa_comments'];
		$adv_id=$_POST['adv_id'];
		if (empty($sa_comments)) {
			$error="Комментарий бос болмау керек!!!";
		}
		else{
			if(addCommentSale($sa_comments,$adv_id,4)){
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
	<input type="hidden" name="adv_id" value="<?=$id?>">
	<div class="clear"></div>
	<label>Comment: </label>
	<textarea cols="20" rows="20" name ="sa_comments"></textarea>
	<input type="submit" name="add_comment" value="submit" class="submit"/>
</form>
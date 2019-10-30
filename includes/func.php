<?
include_once('database.php');


function newsOne($id){

$sql="SELECT * FROM news
		INNER JOIN users ON
		news.user_id=users.id WHERE news_id=$id";
	return queryEasy ($sql);

}
function allNews(){

	$sql="SELECT * FROM news
		INNER JOIN users ON
		news.user_id=users.id";
	return queryEasy ($sql);
}

function fetchAllTables($table, $table1, $key, $key1){


	$sql="SELECT * FROM $table inner join $table1 ON $table.$key=$table1.$key1";
	return queryEasy($sql);

}
function getImages($id){
	$sql="SELECT link FROM images
			INNER JOIN advert ON
			advert.id=images.advert_id
			where advert.id=".$id;
			return queryEasy ($sql);
}
function advertAll(){
    $sql="SELECT * FROM advert 
			INNER JOIN volume on
			advert.volume_id=volume.volume_id
			INNER JOIN oil on
			advert.oil_id=oil.oil_id
			INNER JOIN typekyzov on
			advert.type_id=typekyzov.id
			INNER JOIN images ON
			advert.id=images.advert_id
			INNER JOIN model ON
			advert.model_id=model.id
			INNER JOIN marca on
			model.marca_id=marca.marca_id
			limit 10";
 return queryEasy ($sql);

}
function queryEasy ($query){
	global $link;
	$res=mysqli_query($link, $query);
	$count=mysqli_num_rows($res);

		if($count==1){
			
				$results=mysqli_fetch_assoc($res);
			}
			elseif($count>1){
				while($arr=mysqli_fetch_assoc($res)){
				$results[]=$arr;
			}
		}

		return $results;
}

function fetchTable ($table){

	$sql="SELECT * FROM $table";
	return queryEasy($sql);
}
function fetchTable2($table){
	$sql="SELECT * FROM $table";
	return queryEasy($sql);
}

?>

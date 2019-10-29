<?
include_once('database.php');

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
			INNER JOIN marca on
			advert.marca_id=marca.marca_id
			INNER JOIN volume on
			advert.volume_id=volume.volume_id
			INNER JOIN oil on
			advert.oil_id=oil.oil_id
			INNER JOIN typekyzov on
			advert.type_id=typekyzov.id
			INNER JOIN images ON
			advert.id=images.advert_id
			limit 10
			";
 return queryEasy ($sql);

}
function queryEasy ($query){
	global $link;
	$res=mysqli_query($link, $query);
	$count=mysqli_num_rows($res);

		if($count){
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

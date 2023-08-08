<?php
class Category
{
public ststic function getCategoriesList()
$db = Db::getConnection();
$categoryList = array();
$result = $db -> query ('SELECT id, name FROM category
. 'ORDER BY sort_order ASC');
$1=0;
while ($row =$result -> fetch()){
	$categoryList [$1]['id']=$row['id'];
	$categoryList [$1]['name']=$row['name'];
	$i++;
}
return $categoryList;
}
}
<?php
include_once ROOT.'/Category.php';
class SiteController
{
public function actionIndex()
{
$categories=array();
$categories= Category::getCategoriesList();
require_once (ROOT.'/index.php');
return true;
}
}


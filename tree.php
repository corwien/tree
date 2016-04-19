<?php
include"Tree.class.php";

$tree_obj = new Tree();

$arr = array(
          1 => array('id'=>'1','parentid'=>0,'name'=>'一级栏目一'),
          2 => array('id'=>'2','parentid'=>0,'name'=>'一级栏目二'),
          3 => array('id'=>'3','parentid'=>1,'name'=>'二级栏目一'),
          4 => array('id'=>'4','parentid'=>1,'name'=>'二级栏目二'),
          5 => array('id'=>'5','parentid'=>2,'name'=>'二级栏目三'),
          6 => array('id'=>'6','parentid'=>3,'name'=>'三级栏目一'),
          7 => array('id'=>'7','parentid'=>3,'name'=>'三级栏目二')
    );
$tree_obj->init($arr);
// 
// 呃呃呃
$res = $tree_obj->get_parent(1);
print_r($res);
print_r($tree_obj);



?>
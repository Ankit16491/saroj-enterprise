<?php
include './dao.php';
$d=new dao();
$id=$_POST['id'];

if(isset($_POST['change_product']))
{
    $qu=$d->select('product','category_id='.$id.'');
    $args='<option>--select--</option>';
    while($r=  mysql_fetch_array($qu))
    {
        $args.='<option value="'.$r['product_id'].'">'.$r['product_title'].'</option>';
    }
    echo $args;
}

?>
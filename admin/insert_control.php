<?php
include './dao.php';
include './model.php';

$da=new dao();
$mo=new model();

//$created_by_id=$_SESSION['id'];
$created_by_id=1;

//category
if(isset($_POST['insert_category']))
{
extract($_POST);

$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("category_name", $category_name);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"category_name"=>$mo->get_data("category_name"));

$i=$da->insert("category", $value);
//echo print_r($value);

if($i)
{   
    header("location:index.php?p=show_category");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}

//career
if(isset($_REQUEST['insert_career']))
{
extract($_REQUEST);

$image=$_FILES['candidate_photo']['name'];
$file=$_FILES['candidate_resume']['name'];

$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("candidate_name", $candidate_name);
$mo->set_data("candidate_age", $candidate_age);
$mo->set_data("candidate_gender", $candidate_gender);
$mo->set_data("candidate_address", $candidate_address);
$mo->set_data("position_applying", $position_applying);
$mo->set_data("expected_ctc", $expected_ctc);
$mo->set_data("candidate_resume", $file);
$mo->set_data("candidate_photo", $image);
$mo->set_data("candidate_contact", $candidate_contact);
$mo->set_data("candidate_mail",$candidate_mail);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"candidate_name"=>$mo->get_data("candidate_name"),
               "candidate_age"=>$mo->get_data("candidate_age"),"candidate_gender"=>$mo->get_data("candidate_gender"),
               "candidate_address"=>$mo->get_data("candidate_address"),"position_applying"=>$mo->get_data("position_applying"),
                "expected_ctc"=>$mo->get_data("expected_ctc"),"candidate_resume"=>$mo->get_data("candidate_resume"),
                "candidate_photo"=>$mo->get_data("candidate_photo"),"candidate_contact"=>$mo->get_data("candidate_contact"),
                "candidate_mail"=>$mo->get_data("candidate_mail"));

$i=$da->insert("career", $value);
//echo print_r($value);

if($i)
{   
    move_uploaded_file($_FILES['candidate_resume']['tmp_name'],'career/'. $_FILES['candidate_resume']['name']);
    move_uploaded_file($_FILES['candidate_photo']['tmp_name'],'career/'. $_FILES['candidate_photo']['name']);
    header("location:index.php?p=show_career");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}

//product
if(isset($_REQUEST['insert_product']))
{
extract($_REQUEST);

$image=$_FILES['product_image']['name'];

$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("category_id", $category_id);
$mo->set_data("product_title", $product_title);
$mo->set_data("product_description", $product_description);
$mo->set_data("product_image", $image);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"category_id"=>$mo->get_data("category_id"),
               "product_title"=>$mo->get_data("product_title"),"product_description"=>$mo->get_data("product_description"),
               "product_image"=>$mo->get_data("product_image"));

$i=$da->insert("product", $value);
//echo print_r($value);

if($i)
{   
    move_uploaded_file($_FILES['product_image']['tmp_name'],'product/'. $_FILES['product_image']['name']);
    header("location:index.php?p=show_product");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}

//gallery
if(isset($_REQUEST['insert_gallery']))
{
extract($_REQUEST);

$image=$_FILES['gallery_image']['name'];

$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("gallery_image", $image);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"gallery_image"=>$mo->get_data("gallery_image"));

$i=$da->insert("gallery", $value);
//echo print_r($value);

if($i)
{   
    move_uploaded_file($_FILES['gallery_image']['tmp_name'],'gallery/'. $_FILES['gallery_image']['name']);
    header("location:index.php?p=show_gallery");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}


//godown
if(isset($_POST['insert_godown']))
{
extract($_POST);
$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("godown_name", $godown_name);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"godown_name"=>$mo->get_data("godown_name"));

$i=$da->insert("godown_master", $value);

if($i)
{   
    header("location:index.php?p=show_godown");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}

//Grade Information
if(isset($_POST['insert_grade']))
{
extract($_POST);
$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("grade_name", $grade_name);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"grade_name"=>$mo->get_data("grade_name"));

$i=$da->insert("grade_master", $value);

if($i)
{   
    header("location:index.php?p=show_grade");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}


//stock
if(isset($_REQUEST['insert_stock']))
{
extract($_REQUEST);

//$image=$_FILES['product_image']['name'];

$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("grade_id", $grade_id);
$mo->set_data("section", $section);
$mo->set_data("make", $make);
$mo->set_data("quantity", $quantity);
$mo->set_data("deliver_from_godown", $deliver_from_godown);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"grade_id"=>$mo->get_data("grade_id"),
               "section"=>$mo->get_data("section"),"make"=>$mo->get_data("make"),
               "quantity"=>$mo->get_data("quantity"),"deliver_from_godown"=>$mo->get_data("deliver_from_godown"));

$i=$da->insert("stock_master", $value);
//echo print_r($value);

if($i)
{   
    //move_uploaded_file($_FILES['product_image']['tmp_name'],'product/'. $_FILES['product_image']['name']);
    header("location:index.php?p=show_stock");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}


//price list
if(isset($_REQUEST['insert_pricelist']))
{
extract($_REQUEST);

//$image=$_FILES['product_image']['name'];

$mo->set_data("created_by_id", $created_by_id);
$mo->set_data("grade_id", $grade_id);
$mo->set_data("section", $section);
$mo->set_data("make", $make);
$mo->set_data("quantity", $quantity);
$mo->set_data("rate", $rate);
$mo->set_data("additionalrate", $additionalrate);
$mo->set_data("godown_name", $godown_name);

$value=array("created_by_id"=>$mo->get_data("created_by_id"),"grade_id"=>$mo->get_data("grade_id"),
               "section"=>$mo->get_data("section"),"make"=>$mo->get_data("make"),
               "quantity"=>$mo->get_data("quantity"),"rate"=>$mo->get_data("rate"),"additionalrate"=>$mo->get_data("additionalrate"),"godown_name"=>$mo->get_data("godown_name"));

$i=$da->insert("pricelist", $value);
//echo print_r($value);

if($i)
{   
    //move_uploaded_file($_FILES['product_image']['tmp_name'],'product/'. $_FILES['product_image']['name']);
    header("location:index.php?p=show_pricelist");
}
 else 
{
     echo "<script>alert('try again...');</script>";
}
}

?>
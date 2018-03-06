<?php
include './dao.php';
include './model.php';

$da=new dao();
$mo=new model();

if(isset($_GET['career']))
{
    $id=$_GET['career'];
    $i=$da->delete("career","career_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_career");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

if(isset($_GET['category']))
{
    $id=$_GET['category'];
    $i=$da->delete("category","category_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_category");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

if(isset($_GET['gallery']))
{
    $id=$_GET['gallery'];
    $i=$da->delete("gallery","gallery_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_gallery");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

if(isset($_GET['product']))
{
    $id=$_GET['product'];
    $i=$da->delete("product","product_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_product");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

if(isset($_GET['contact']))
{
    $id=$_GET['contact'];
    $i=$da->delete("contact_us","contact_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_contact");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}


//godown

if(isset($_GET['godown']))
{
    $id=$_GET['godown'];
    $i=$da->delete("godown_master","godown_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_godown");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}


//grade

if(isset($_GET['grade']))
{
    $id=$_GET['grade'];
    $i=$da->delete("grade_master","grade_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_grade");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

// Stock Delete

if(isset($_GET['stock']))
{
    $id=$_GET['stock'];
    $i=$da->delete("stock_master","stock_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_stock");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

// Price List ::

if(isset($_GET['pricelist']))
{
    $id=$_GET['pricelist'];
    $i=$da->delete("pricelist","price_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_pricelist");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

// Inquiry List ::

if(isset($_GET['inquiry']))
{
    $id=$_GET['inquiry'];
    //echo $id;exit;
    $i=$da->delete("inquirydata","inq_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_inquiry");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

// Inquiry List ::

if(isset($_GET['order']))
{
    $id=$_GET['order'];
    //echo $id;exit;
    $i=$da->delete("order_data","order_id=$id");
    
    if($i)
    {
        header("location:index.php?p=show_order");
    }
    else 
    {
        echo "<script>alert('try again...');</script>";
    }
}

?>
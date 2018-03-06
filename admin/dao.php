<?php
include 'interface1.php';

class dao implements interface1
{   
    private $conn;
    
    function __construct() 
    {
        include 'DBConnect.php';
        $db=new DBConnect();
        $this->conn=$db->connect();
    }
    
    function insert($table,$value)
    {
        $field="";
        $val="";
        $i=0;
        
        foreach ($value as $key => $va)
        {
            if($i==0)
            {
                $field.=$key;
                $val.="'".$va."'";
            }
            else 
            {
                $field.=",".$key;
                $val.=",'".$va."'";
            }
            $i++;
        }
        
        return mysql_query("INSERT INTO $table($field) VALUES($val)");
    }
    
    function select($table,$where='',$other='')
    {
        if($where!='')
        {
            $where = "where ".$where;
        }
        return mysql_query("select * from $table $where $other");
    }
    
    function update($table,$value,$where='')
    {
        $val="";
        $i=0;
        foreach ($value as $key => $va) 
        {
            if($i==0)
            {
                $val.=$key."='".$va."'";
            }
            else 
            {
                $val.=",".$key."='".$va."'";
            }
            $i++;
        }
        if($where!='')
        {
            $where="where ".$where;
        }
        return mysql_query("update $table set $val $where");
    }
    
    function delete($table,$where='')
    {
        if($where!='')
        {
            $where="where ".$where;
        }
        return mysql_query("update $table set active_flag=1 $where");
    }
}
?>
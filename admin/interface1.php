<?php
interface interface1 
{
    function insert($table,$value);
    function select($table,$where='',$other='');
    function update($table,$value,$where='');
    function delete($table,$where='');
}
?>

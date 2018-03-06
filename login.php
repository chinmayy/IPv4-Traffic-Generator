<?php
$link=mysqli_connect("127.0.0.1","root","cciitk","login");
if(isset($_POST['username']) && isset($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
if (!empty($username) && !empty($password))
{
$query= "SELECT*FROM user WHERE username='$username' AND
password='$password' ";
$query_run=mysqli_query($link,$query);
if (mysqli_num_rows($query_run)==1)
{
echo 'Login successfull';
}
else
22
{
echo 'invalid username/password';
}}}
?>
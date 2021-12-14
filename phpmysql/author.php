<?php
require ('db.php');
$db = new DB();
$last_name ='';
$first_name ='';
$father_name ='';
if(isset($_POST['first_name']) and $_POST['first_name']!==''){
    $first_name=$_POST['first_name'];
}
if(isset($_POST['last_name']) and $_POST['last_name']!=='') {
    $last_name = $_POST['last_name'];
}
if(isset($_POST['father_name'])){
    $father_name = $_POST['father_name'];
}
if($last_name =='' or $first_name == '') {
    echo 'Ошибка';

} else {
    $response = $db->createdAuthor([
        'last_name'=>$last_name,
        'first_name'=>$first_name,
        'father_name'=>$father_name]);
    $res = json_decode($response);
    if(!$res->error){
        echo $res->message;

    }
    if($res->error){
        header('location: forms.php?message='.$res->message);
    }
}
?>

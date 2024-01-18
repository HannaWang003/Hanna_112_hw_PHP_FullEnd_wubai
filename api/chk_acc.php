<?php
include_once "db.php";

if(!empty($_POST['acc'])){
    if(!empty($_POST['pw'])){
 $res = $DB->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
 echo $res;
if($res==1){
    $_SESSION['acc']=$_POST['acc'];
}
    }
    else{
        echo "empty";
    }
}
else{
echo "empty";
}
?>
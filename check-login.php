<?php
$username=isset($_POST['username'])?$_POST['username']:'';
$password=isset($_POST['password'])?$_POST['password']:'';
$ok=true;
$message=array();


if(!isset($username)||empty($username)){
    $ok=false;
    $messages[]='username cannot be empty';
}


if(!isset($password)||empty($password)){
    $ok=false;
    $message='password cannot be empty!';

}

if($ok){
    if($username==='dcode' && $password==='dcode'){
        $ok=true;
        $message[]='successful login!';
    }
    else{
        $ok=false;
        $message[]='Incorrect username/pass!!!!';
    }
}
echo json_encode(
    array(
        'ok'=> $ok, 'messages'=> $message
    )
)
?>
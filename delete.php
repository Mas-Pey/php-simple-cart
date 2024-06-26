<?php
    session_start();
    $id=$_SESSION['id'];
    $name=$_SESSION['name'];
    $qty=$_SESSION['qty'];
    $price=$_SESSION['price'];

    if($_GET['id']=="all"){
        session_unset();
        session_destroy();
        header("location: cart.php");
    }else{
        unset($id[$_GET['id']]);
        unset($name[$_GET['id']]);
        unset($qty[$_GET['id']]);
        unset($price[$_GET['id']]);
        $_SESSION['id']=$id;
        $_SESSION['name']=$name;
        $_SESSION['qty']=$qty;
        $_SESSION['price']=$price;
        header("location: cart.php");
    }
    
?>
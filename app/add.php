<?php

if (isset($_POST["title"])){
    require "../connection.php";
    $title = $_POST["title"]; 
    
    if (empty($title)) {
        header("Location: ../index.php?mess=error");
    } else {
        $stmt = $conn->prepare("INSERT INTO todos(title) Value(?)");
        $res = $stmt->execute([$title]);

        if($res) {
            header("location: ../index.php?mess=success");
        }else{
            header("location: ../index.php");
        }
        $conn = null;
    }

}else {
    header("Location: ../index.php?mess=error");
}


?>
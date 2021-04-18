<?php

if (isset($_POST["id"])){
    require "../connection.php";
    $id = $_POST["id"]; 
    
    if (empty($id)) {
        header("Location: ../index.php?mess=error");
    } else {
        $stmt = $conn->prepare("DELETE FROM todos WHERE id=? ");
        $res = $stmt->execute([$id]);

        if($res) {
            header("Location: ../index.php?mess=success");
        }else{
            header("Location: ../index.php");
        }
        $conn = null;
    }

}else {
    header("Location: ../index.php?mess=error");
}

?>
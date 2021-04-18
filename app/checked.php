<?php

if (isset($_POST["id"])){
    require "../connection.php";
    $id = $_POST["id"]; 
    
    if (empty($id)) {
        echo "error";
    } else {
        $checked = $_POST["checked"];        
        $res = $conn->prepare("UPDATE todos SET checked=:checked WHERE id=:id");
        $result = $res->execute(array(':checked' => $checked, ':id' => $id));

        if($result) {
            header("location: ../index.php?mess=success");
        }else {
            header("location: ../index.php");
        }
        $conn = null;
    }

}else {
    header("Location: ../index.php?mess=error");
}

?>
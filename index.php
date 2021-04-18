<?php
require "connection.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
      <div class="header-text">To-Do List</div>
</header>

   <div class="main-section">
        <div class="add-section">
            <form action="app/add.php" method="POST" autocomplete="off" >
                <?php if(isset($_GET["mess"]) && $_GET["mess"] == "error"){ ?>
                        <input type="text" name="title" style="border-color: red" placeholder="this field is required" />
                        <button type="submit"> Add + </button>
                <?php }else{ ?>
                        <input type="text" name="title" placeholder="this field is required" />
                        <button type="submit"> Add + </button>
                <?php } ?>
            </form>
        </div>

        <?php 
            $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
        ?>

        <div class="show-todo-section">
           <?php while( $todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item"> 
                  <form action="app/delete.php" method="POST" class="remove-to-do">
                    <input type="hidden" name="id" value="<?php echo $todo['id']; ?>" >
                    <button class="delete-todo" type="submit">
                    <span>x</span>
                    </button>
                  </form>

                  <input type="checkbox" class="check-box" <?php echo $todo['checked'] ? 'checked' : '' ?> data-id="<?php echo $todo['id']; ?>"/> 
                  <h2 class="<?php echo $todo['checked'] ? 'checked' : '' ?>"><?php echo $todo["title"] ?></h2>
                  <br>
                  <small>created:<?php echo $todo["date_time"] ?></small>
               </div>
           <?php } ?>           

        </div>
   </div>
</body>

<script type="text/javascript"> 
    // checkbox押下時のイベント設定
    Array.from(document.getElementsByClassName('check-box')).forEach(check => {     
        check.addEventListener('click', e => {
            const target = e.target;
            // formの生成
            const form = document.createElement('form');
            form.style.visibility = "hidden";
            const id = document.createElement('input');
            id.name = 'id';
            id.value = target.dataset.id;
            form.appendChild(id);
            const check = document.createElement('input');
            check.name = 'checked';
            check.value = target.checked ? 1 : 0;
            form.appendChild(check);
            form.action = 'app/checked.php';
            form.method = 'POST';
            document.body.appendChild(form);
            form.submit();
        });
    });
</script>

</html>
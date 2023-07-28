
<?php
    
        include('config.php');
        if (isset($_POST['add_task'])) {
            $title = sanitize($conn, $_POST['title']);
            $description = sanitize($conn, $_POST['description']);

            $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
            $conn->query($sql);
        }

        if (isset($_POST['update_task'])) {
            $id = $_POST['id'];
            $title = sanitize($conn, $_POST['title']);
            $description = sanitize($conn, $_POST['description']);

            $sql = "UPDATE tasks SET title='$title', description='$description' WHERE id=$id";
            $conn->query($sql);
        }

        if (isset($_GET['delete_task'])) {
            $id = $_GET['delete_task'];

            $sql = "DELETE FROM tasks WHERE id=$id";
            $conn->query($sql);
        }
    ?>
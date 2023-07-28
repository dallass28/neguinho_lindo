<?php
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $created_at = $row['created_at'];
                echo "<tr>
                        <td>$title</td>
                        <td>$description</td>
                        <td>$created_at</td>
                        <td>
                            <form action='' method='post'>
                                <input type='hidden' name='id' value='$id'>
                                <input type='text' name='title' value='$title' required>
                                <input type='text' name='description' value='$description'>
                                <button type='submit' name='update_task'>Atualizar</button>
                            </form>
                            <a href='?delete_task=$id' onclick='return confirmDelete()'>Deletar</a>
                        </td>
                    </tr>";
                    }
                }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js"></script>
</head>
<body>
    <?php
        include('adicionar.php');
    ?>
    <div class="container">
        <h1>Gerenciador de Tarefas</h1>

        <form action="#" method="post">
            <input type="text" name="title" placeholder="Título" required>
            <input type="text" name="description" placeholder="Descrição">
            <button type="submit" name="add_task">Adicionar Tarefa</button>
        </form>

        <table>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data de Criação</th>
                <th>Mudanças</th>
            </tr>
            <?php
               include('exibir.php');
            ?>
        </table>
    </div>
</body>
</html>

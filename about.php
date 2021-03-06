<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>PHP</title>
</head>
<body>
    <?php require "blocks/header.php" ?>

    <div class="container mt-5">
        <div class="card mb-4 rounded-0 shadow-sm">
            <h3>Контактная форма</h3>
            <form action="check.php" method="post">
                <input type="email" name="email" placeholder="Введите Email"
                class="form-control mb-1">
                <textarea name="message" class="form-control mb-2"
                placeholder="Введите ваше сообщение"></textarea>
                <button type="submit" nam="send" class="btn btn-success">Отправить</button>
            </form>
        </div>
    </div>

    <?php require "blocks/footer.php" ?>
</body>
</html>



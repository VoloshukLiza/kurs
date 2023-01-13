<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col">
        <h1>Отправить посылку</h1>
        <form action="add.php" method="post">
          <input type="text" class="form-control" name="name" id="name"  placeholder="Введите название посылки"><br>
          <input type="text" class="form-control" name="post_num" id="post_num"  placeholder="Введите номер постамата"><br>
          <button class="btn btn-success" type="submit">Отправить</button>
        </form>
      </div>
    </div>
</body>
</html>

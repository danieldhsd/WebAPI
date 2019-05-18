<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <h2>Clientes Cadastrados</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th class="table table-info">Nome</th>
            <th class="table table-info">Email</th>
            <th class="table table-info">Telefone</th>
            <th class="table table-danger">Deletar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>john@example.com</td>
            <td>98827156</td>
            <td><a href="{% url 'person_delete' person.id %}"><i class="fas fa-trash"></i></a></td>
        </tr>
        </tbody>
    </table>
    </div>

</body>
</html>
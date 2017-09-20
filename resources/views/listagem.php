<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Controle de estoque</title>
  </head>

  <body>
    <h1>Listagem de produtos</h1>
    <div class="container">
      <table class="table table-striped table-bordered table-hover">
        <?php foreach ($produtos as $p): ?>
        <tr>
          <td><?= $p->nome ?></td>
          <td><?= $p->valor ?></td>
          <td><?= $p->descricao ?></td>
          <td><?= $p->quantidade ?></td>
          <td>
            <a href="/produtos/mostra/<?= $p->id ?>">
              <span class="glyphicon glyphicon-search"></span>
            </a>
          </td>
        </tr>
        <?php endforeach ?>
      </table>
    </div>
  </body>
</html>
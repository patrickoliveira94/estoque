<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">        
    <title>Controle de estoque</title>
</head>
<body>
  <div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">      
      <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li>
          <a class="navbar-brand" href="{{action('ProdutoController@lista')}}">
              Listagem
          </a>
      </li>
      <li>
          <a class="navbar-brand" href="{{action('ProdutoController@novo')}}">
              Novo
          </a>
      </li>
    </ul>

    </div>
  </nav>

    @yield('conteudo')

  <footer class="footer">
      <p>© 2017 Patrick Mendonça Oliveira</p>
  </footer>

  </div>
</body>
</html>
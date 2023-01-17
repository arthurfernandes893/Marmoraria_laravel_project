<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="/js/jquery-3.6.1.min.js"></script>
    <script src="/js/script.js"></script>
    <title>Marmoraria </title>
</head>
    <body>
    
    <header  id="header"> 
      <section   class="bg-success" id="barra-header">  
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid text-light">
              <a class="navbar-brand text-light fs-2" href="index.php">Marmoraria</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-light fs-4" aria-current="page" href="produtos.php">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light fs-4" href="parceiros">Parceiros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light fs-4" href="orcamentos">Orçamentos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light fs-4" href="#footer">Quem Somos</a>
                  </li>              
                </ul>
                  <form class="d-flex" role="search" action="resultados-index.php">
                    <input class="form-control me-2" type="search"  id="pesquisa" name="pesquisa" placeholder="O que procura?" aria-label="Search">
                    <button class="btn btn-light" type="submit" name="ENVIAR" value="Pesquisar">Search</button>
                  </form>

                  <!--  <form action="resultados-index.php">
                      <input class="form-control" type="text" id="pesquisa" name="pesquisa" placeholder="O que procura?">
                          <input class="btn bg-white" type="submit" name="ENVIAR" value="Pesquisar"><br>
                    </form> -->
                             
                          
              </div>
            </div>
          </nav>
      </section>
    </header>
@yield('content')
 <!---------------------footer----------------------------->
        <footer class="bg-success">
            <h3> Marmoraria Comercio LTDA.</h3>
            <p id="footer"> 
                <b>E-mail:</b> <e-mail>marmopf@emailficticio.com</e-mail> <br> 
                <b>Telefone:</b>  555-2424 <br>
                <b>Endereço:</b> <address> R. dos marmoristas 1352. Cruzeiro do Sul, Acre. Brazil</address>
            </p>
            <p>"Ornando o exterior com excelência interior".</p>
        </footer>

    </body>
</html>
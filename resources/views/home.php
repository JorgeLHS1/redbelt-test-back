<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>RedBelt - Test</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <nav class="materialize-red lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo">RedBelt Test</a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br /><br />
      <h1 class="header center red-text">RedBelt Test</h1>
      <br /><br />
    </div>
  </div>

  <div class="container">
    <div class="section">
      <table id="incidents-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Criticidade</th>
            <th>Tipo</th>
            <th>Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <br /><br />
    <div class="divider"></div>
    <h5 id="form-title" class="center">Adicionar Incidente</h5>
    <div class="section">
      <form id="incident-form" class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Título" id="title" name="title" type="text" class="validate">
            <label for="title">Título</label>
          </div>
          <div>
            <div class="container center col s6">
              <label for="status">Status</label>
              <div class="switch">
                <label>
                  Desativado
                  <input id="status" type="checkbox">
                  <span class="lever"></span>
                  Ativo
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="description" name="description" class="materialize-textarea"></textarea>
            <label for="description">Descrição</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <select id="criticality" name="criticality">
              <option value="" disabled selected>Selecione sua opção</option>
              <option value="low">Baixa</option>
              <option value="medium">Média</option>
              <option value="high">Alta</option>
            </select>
            <label>Criticidade</label>
          </div>
          <div class="input-field col s6">
            <select id="type" name="type">
              <option value="" disabled selected>Selecione sua opção</option>
              <option value="alarm">Alarme</option>
              <option value="incident">Incidente</option>
              <option value="others">Outros</option>
            </select>
            <label>Tipo</label>
          </div>
        </div>
        <div class="row center">
        <button class="btn waves-effect waves-light btn-large materialize-red lighten-1" type="submit" value="create">Adicionar
          <i class="material-icons right">save</i>
        </button>
      </div>
      <input id="id" name="id" type="text" hidden >
      </form>
    </div>
  </div>


  <footer class="page-footer materialize-red lighten-1">
    <div class="footer-copyright">
      <div class="container">
        Made by
        <a class="red-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/app.js"></script>
</body>

</html>

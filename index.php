<?php 

include("model_dados_pessoais.php");
// Conexão com o banco de dados

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">João Pedro Casarin de Araújo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="corNavbar01">
      <ul class="navbar-nav mr-auto">
        <li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Ação</button>
              <button class="dropdown-item" type="button">Another Ação</button>
              <button class="dropdown-item" type="button">Something else here</button>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pag003.html" rel="next">Downloads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pag002.html" rel="next">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
  <h1>Curriculum Vitae</h1>
  <hr>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <img src="imagens/perfil.jpg" alt="imagem de perfil"  width="150" height="150" padding="10" class="rounded" >
        <h2>Resumo</h2>
        <p>Sou um estudante de Análise e Desenvolvimento de Sistemas, com experiência em desenvolvimento de sistemas e manutenção de computadores. Tenho habilidades em HTML, CSS e JavaScript, além de conhecimento em redes de computadores. Estou sempre buscando aprender mais e me desenvolver profissionalmente.</p>
        <section>
          <h2>Idiomas</h2>
          <ul class="languages">
            <li>Português - Nativo</li>
            <li>Inglês - Fluente</li>
            <li>Espanhol - Básico</li>
          </ul>
        </section>
      </div>
      <div class="col">
        <header>
          <h2><?php echo $name; ?></h2>
          <p>Técnico em Informática</p>
          <p><strong>Email:</strong><?php echo $email; ?> |
          <strong>Telefone:</strong><?php echo $contact_number; ?></p>
          <p><strong>Data de nascimento:</strong><?php echo $birth; ?></p>
        </header>
        <section>
          <h2>Experiência Profissional</h2>
          <p><strong>2020 - 2022:</strong> Estágio em Desenvolvimento de Sistemas - Contama Contabilidade</p>
          <p><strong>2022 - :</strong> Técnico em informatica - Contama Contabilidade</p>
          <p><strong>2025 - 2025:</strong> Estágio em Desenvolvimento de Sistemas - FEMARH</p>
        </section>
        <section>
          <h2>Formação Acadêmica</h2>
          <p><strong>2017 - 2019:</strong> Ensino Médio - Instituto Federal de Roraima <br>Formação:Técnico em Edificações</p>
          <p><strong>2020 - :</strong> Análise e desenvolvimento de sistemas - IFRR CBV</p>
        </section>
      </div>
      </div>
    </div>
  </div>
 <section>
      <h2>Habilidades</h2>
      <ul class="skills">
        <li>HTML / CSS / JavaScript</li>
        <li>Manutenção de computadores</li>
        <li>Pacote Office / LibreOffice</li>
        <li>Redes de computadores</li>
        <li>Trabalho em equipe</li>
      </ul>
    </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

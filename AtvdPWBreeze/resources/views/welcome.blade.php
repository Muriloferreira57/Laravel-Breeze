<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <title>Etec da Zona Leste</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    header {
      background-color: #004080;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }

    /* NAVBAR NOVA */
    nav {
      background-color: #003366;
      padding: 10px 20px;
    }

    .navbar-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .navbar-left .etec-title {
      color: white;
      font-size: 24px;
      font-weight: bold;
    }

    .navbar-links {
      display: flex;
      gap: 20px;
    }

    .navbar-links a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
    }

    .navbar-links a:hover {
      text-decoration: underline;
    }

    .navbar-right .navbar-logo {
      height: 40px;
    }

    /* CONTAINER DA LOGO ABAIXO DA NAVBAR */
    .logo-container {
      background-color: white;
      text-align: center;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .logo-banner {
      height: 100px;
      max-width: 100%;
    }

    section {
      padding: 30px 20px;
      max-width: 1100px;
      margin: auto;
      background-color: white;
      margin-top: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    section h2 {
      color: #004080;
      margin-bottom: 20px;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      background-color: #e6f0ff;
      padding: 20px;
      border-radius: 8px;
      flex: 1 1 300px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    table, th, td {
      border: 1px solid #ccc;
    }

    th, td {
      padding: 10px;
      text-align: center;
    }

    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    form button {
      background-color: #004080;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    footer {
      background-color: #004080;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 30px;
    }

    @media screen and (max-width: 768px) {
      .cards {
        flex-direction: column;
      }

      .navbar-content {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Etec da Zona Leste</h1>
    <p>Excelência em Ensino Técnico</p>
  </header>

  <!-- NAVBAR COM LOGO E NOME -->
  <nav>
    <div class="navbar-content">
      <div class="navbar-left">
        <span class="etec-title">ETEC</span>
      </div>
      <div class="navbar-links">
        <a href="#sobre">Sobre</a>
        <a href="#cursos">Cursos</a>
        <a href="#horarios">Horários</a>
        <a href="#contato">Contato</a>
      </div>
      <div class="navbar-right">
        <img src="logo.png" alt="Logo ETEC" class="navbar-logo">
      </div>
    </div>
  </nav>

  <!-- CONTAINER COM A LOGO GRANDE ABAIXO DA NAVBAR -->
  <div class="logo-container">
    <img src="logo.png" alt="Logo da Etec" class="logo-banner">
  </div>

  <!-- CONTEÚDO PRINCIPAL -->
  <section id="sobre">
    <h2>Sobre a Etec</h2>
    <p>A Etec da Zona Leste oferece ensino técnico de qualidade, preparando os alunos para o mercado de trabalho e para o ingresso no ensino superior. Localizada na zona leste de São Paulo, a escola conta com laboratórios modernos, professores capacitados e um ambiente voltado para a aprendizagem prática.</p>
  </section>

  <section id="cursos">
    <h2>Cursos Oferecidos</h2>
    <div class="cards">
      <div class="card">
        <h3>Desenvolvimento de Sistemas</h3>
        <p>Curso focado em lógica de programação, banco de dados, front-end e back-end com foco no mercado atual.</p>
      </div>
      <div class="card">
        <h3>Administração</h3>
        <p>Prepara profissionais para atuar em setores administrativos com foco em gestão, planejamento e organização.</p>
      </div>
      <div class="card">
        <h3>Recursos Humanos</h3>
        <p>Forma profissionais aptos a lidar com recrutamento, seleção, treinamento e desenvolvimento de pessoas.</p>
      </div>
    </div>
  </section>

  <section id="horarios">
    <h2>Horários das Aulas</h2>
    <table>
      <tr>
        <th>Curso</th>
        <th>Período</th>
        <th>Horário</th>
      </tr>
      <tr>
        <td>Desenvolvimento de Sistemas</td>
        <td>Manhã</td>
        <td>07:00 - 12:15</td>
      </tr>
      <tr>
        <td>Administração</td>
        <td>Tarde</td>
        <td>13:00 - 18:15</td>
      </tr>
      <tr>
        <td>Recursos Humanos</td>
        <td>Noite</td>
        <td>19:00 - 23:00</td>
      </tr>
    </table>
  </section>

  <section id="contato">
    <h2>Fale Conosco</h2>
    <form>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

      <button type="submit">Enviar</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Etec da Zona Leste | Rua Alcântara, 1131 - São Paulo - SP | Tel: (11) 0000-0000</p>
  </footer>

</body>
</html>

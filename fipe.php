<?php include 'common/header.php'; ?>


  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Giovani Generali" />
    <meta
      name="description"
      content="Consultar preços médios de veículos diretamente na FIPE."
    />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./images/logo.png" type="image/png" />
    <link rel="apple-touch-icon" href="./images/logo.png" />
    <link rel="manifest" href="./manifest.json" />
   
    <link rel="stylesheet" href="./fipe.css" />
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"
    ></script>
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    ></script>
    <script defer src="./app.js"></script>
  </head>

  <body>
    <h1>Preço de Veículo</h1>
    <p>Consultar preços médios de veículos diretamente na FIPE.</p>
    <hr />
    <div class="container">
      <div id="form">
        <label>
          <h4>Mês de referência</h4>
          <select id="referencia" disabled>
            <option value="">-</option>
          </select>
        </label>
        <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
        <label>
          <h4>Típo de veículo</h4>
          <select id="tipo_veiculo" disabled>
            <option value="">-</option>
            <option value="1">🚗&nbsp;&nbsp;Carro</option>
            <option value="2">🏍️&nbsp;&nbsp;Moto</option>
            <option value="3">🚚&nbsp;&nbsp;Caminhão</option>
          </select>
        </label>

        <label>
          <h4>Marca</h4>
          <select id="marca" disabled>
            <option value="">-</option>
          </select>
        </label>

        <label>
          <h4>Modelo</h4>
          <select id="modelo" disabled>
            <option value="">-</option>
          </select>
        </label>

        <label>
          <h4>Ano / Combustível</h4>
          <select id="ano" disabled>
            <option value="">-</option>
          </select>
        </label>

        <p>
          <button type="button" id="search" disabled>Consultar</button>
        </p>
      </div>

      <div id="resultado"></div>
    </div>

  

    <script>
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
          navigator.serviceWorker.register("./sw.js");
        });
      }
    </script>

<?php include 'common/footer.php'; ?>   

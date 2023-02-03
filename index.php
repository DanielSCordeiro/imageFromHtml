<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <title>Criar imagem a partir de um HTML e salvar no disco com PHP</title>
</head>
<body>

  <!-- CONTEÚDO DA IMAGEM -->
  <div class="capture">
    <p>Hello world!</p>
  </div>

  <!-- GERAR A IMAGEM EM BASE64 -->
  <script type="text/javascript" src="html2canvas.min.js"></script>
  <script>
    html2canvas(document.querySelector(".capture"))
    .then(canvas => {
      let img = canvas.toDataURL()
      console.log(img)
    });
  </script>

</body>
</html>
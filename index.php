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
    // criar imagem a partir do conteúdo da div.capture
    let seletor = document.querySelector(".capture")
    html2canvas(seletor)
    .then(canvas => {
      let img = canvas.toDataURL()
      SalvarImagem(img)
    })
    // salvar imagem no disco
    async function SalvarImagem(img) {
      let body = new FormData()
          body.append('imagem', img)
      let salvar = await fetch('salvar.php', {
        method: 'POST',
        body
      })
      let res = await salvar.json()
      if (res.status === 'sucesso') {
        alert('A imagem foi salva com sucesso!')
      } else {
        alert('Houve uma falha ao salvar a imagem!')
      }
    }
  </script>

</body>
</html>
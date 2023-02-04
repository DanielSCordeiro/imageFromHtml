<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-type: application/json; charset=utf-8');
  // receber a imagem via POST
  $imagem = $_POST['imagem'];
  if ($imagem) {

    $destino = './imagens/nome.png';
    $arquivo = file_get_contents($imagem);
    $resposta = file_put_contents($destino, $arquivo);

  } else {
    $resposta = false;
  }
  // status do processo
  echo json_encode($resposta);
?>
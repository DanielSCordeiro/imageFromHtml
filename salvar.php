<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-type: application/json; charset=utf-8');
  // receber a imagem via POST
  $imagem = $_POST['imagem'];
  if ($imagem) {


    $resposta = array("status" => "sucesso");
  } else {
    $resposta = array("status" => "falha");
  }
  // status do processo
  echo json_encode($resposta);
?>
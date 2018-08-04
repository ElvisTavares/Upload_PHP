<?php

$diretorio = "arquivos/";
$uploadF = $diretorio.uniqid().basename($_FILES['upload']['name']);




if (move_uploaded_file($_FILES['upload']['tmp_name'],$uploadF)){
    echo "Upload feito com sucesso.";
}else{
    echo "Erro, upload não foi realizado...";
}

echo "<br>";
echo "<a href=\"index.php\">Voltar</a>";






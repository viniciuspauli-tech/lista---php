<?php

function mascararCpf($cpf)
{

    $cpf = str_replace(['.', '-'], '', $cpf);


    $cpfMascarado = str_repeat('*', strlen($cpf) - 4) . substr($cpf, -4);

    return $cpfMascarado;
}

$cpf = "123.456.789-00";

echo "CPF original: $cpf <br>";

echo "CPF mascarado: " . mascararCpf($cpf);

?>
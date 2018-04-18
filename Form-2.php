<?php

$Xcodigo=$_POST['codigo'];
$XobjEdital=$_POST['objEdital'];
$XitemEdital=$_POST['itemEdital'];
$Xmodalidade=$_POST['modalidade'];

//desativa verificação SSL
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

//constrói query
$postdata = http_build_query(
    array(
        'codigo' => $Xcodigo,
        'objEdital' => $XobjEdital,
                'itemEdital' => $XitemEdital,
        'modalidade' => $Xmodalidade
    )
);

//constrói POST
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    ),    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    )
    
);

//Cria contexto POST
$context  = stream_context_create($opts);


//Baixa site após fazer o POST e o armazena na string $response
$response = file_get_contents("https://www.compras.df.gov.br/publico/em_andamento.asp", false, $context);

//Converte string response para UTF-8
      $utf8decoded= mb_convert_encoding($response, 'UTF-8', mb_detect_encoding($response, 'UTF-8, ISO-8859-1', true));




//cria array separado por linhas
$convert = explode("\n", $utf8decoded);

//imprime corpo html
echo '<html>
<head>
<meta charset="UTF-8"/>
<title>Document</title>
<link href="https://www.compras.df.gov.br/publico/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>';


for ($i=2524;$i<2678;$i++)  
{
    echo $convert[$i];
}

for ($j=2699;$j<2723;$j++)  
{
    echo $convert[$j];
}

echo '</body></html>';

?>

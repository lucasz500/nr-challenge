<?php

$Xcodigo=$_POST['codigo'];
$XobjEdital=$_POST['objEdital'];
$XitemEdital=$_POST['itemEdital'];
$Xmodalidade=$_POST['modalidade'];


$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$postdata = http_build_query(
    array(
        'codigo' => $Xcodigo,
        'objEdital' => $XobjEdital,
                'itemEdital' => $XitemEdital,
        'modalidade' => $Xmodalidade
    )
);

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

$context  = stream_context_create($opts);



$response = file_get_contents("https://www.compras.df.gov.br/publico/em_andamento.asp", false, $context);

      $utf8decoded= mb_convert_encoding($response, 'UTF-8', mb_detect_encoding($response, 'UTF-8, ISO-8859-1', true));





$convert = explode("\n", $utf8decoded); //create array separate by new line

echo '<html>
<head>
<meta charset="UTF-8"/>
<title>Document</title>
<link href="https://www.compras.df.gov.br/publico/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>';


for ($i=2524;$i<2678;$i++)  
{
    echo $convert[$i]; //write value by index
}

for ($j=2699;$j<2723;$j++)  
{
    echo $convert[$j]; //write value by index
}

echo '</body></html>';

?>
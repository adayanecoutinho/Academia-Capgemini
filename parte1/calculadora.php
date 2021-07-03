<?php

//valor inicial
$valor = 500.00;
		
//$valor     = intval($valor);
//cliques
$cliques   = ($valor/100) * 12;

//compartilhamento do anuncio original
$comp_orig = ($cliques / 20) * 3;

//visualizacao do anuncio original
$vis_orig  = $comp_orig * 40;

//compartilhamento em cadeia (4x)
$comp_sec  = $comp_orig * 4;

//visualização do anuncio com base no compartilhamento em cadeia
$vis_sec   = $comp_sec * 40;

//total das visualizações
$total_vis = $vis_orig + $vis_sec;

echo "Com base no seu investimento inicial, concluimos que obteve " . $total_vis . " visualizações.";

?>
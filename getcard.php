<?php
$suits = array (
    "Bruno"
);
 
$faces = array (
    "Voz", "Video", "Pensativo", "Fotos", "Cancela", "Diferente", "Pirata",
    "SAO", "PlayerBruno0", "Eduardo", "Zap", "Perfil", "Bubu"
);

$deck = array();
 
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}
    shuffle($deck);
 
$card = array_shift($deck);
 
echo '"'.$card['suit'] . '  ' . $card['face'].'"';

?>
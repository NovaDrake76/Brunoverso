<?php

$brunos = array(
    'Bruno Eduardo', 'Bruno Voz', 'Bruno Voz Estourado', 'Bruno Voz Estourado Requiem', 'Bruno Voz Estourado Over Heaven', 'Bruno Video',
    'Bruno Mudinho', 'Bruno Hacker', 'Boa noite Bruno', 'Bruno Pensativo - O único Bruno que consegue ficar calado.', 'Bruno SAO', 'Bruno Fotos',
    'Bruno Emo', 'Bruno Cancela', 'Bruno Skyrim', 'Bruno Smart Library', 'Bruno Multilingua', 'Bruno Bilingue',
    'Bruno Língua', 'Bruno Icon', 'Bruno Perfil', 'Bruno Caçador', 'Bruno Crossfiteiro', 'Bruno Diferente',
    'Bruno Gestante', 'Bruno Lee', 'Bruno Brito', 'Big Bruno', 'Bruno Tio', 'Bruno Zap',
    'Bruno Yamashita','Bruno Fome','Bruno Pizzaiolo','Bruno Topetão','Bruno Ou','Bruno Testereal','Bruno Yandere',
    'Bruno Parabéns','Bruno Lata','Bruno Corona','Bruno Tosse','Bruno Psycho 100','PlayerBruno0','PlayerBruno-1',
    'Bruno Bocejo','Bruno Gank','Bruno sem faca','Bruno Perguntas','Bruno Husky','Bruno Granulado',
    'Bruno Motos','Brunooeduardoodev','Bruno Moe','Bruno Spotify','Bruno Almoço','Bruno Netlify',
    'Bruno Pirata','Bruno Sinucas','Bruno Crítica Social','Bruno Sonoplastias','Bubu','Bruno Estourado na calçada',
    'Bruno Eduadro','Bruno Flautista','Bruno Zelda','Bruno Sonoplasta','Bruno Violão');


function picker($brunos){
    
    $rand_keys = array_rand($brunos, 3);
    echo nl2br("\n");
    echo nl2br ($brunos[$rand_keys[0]] . "\n");
    echo nl2br ($brunos[$rand_keys[1]] . "\n");
    echo nl2br ($brunos[$rand_keys[2]] . "\n");
    $brunoativo=false;
}

  if (isset($_GET['brunoativo'])) {
    picker($brunos);
  }
?>
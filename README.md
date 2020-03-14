# PHP_VARIABLE

$originalTitle = "Indiana Jones and the Last Crusade";  
  $viewMovie = true;  
  $movieScore = 8.2;  
  $releaseYear = 1989;

echo $originalTitle . "\n";  
  echo $viewMovie . "\n";  
  echo $movieScore . "\n";  
  echo $releaseYear . "\n";


# Message codé pour Indy

function secretMessage($text) {  
    $sousChain = substr($text, 5, strlen($text) / 2);  
    return strrev(str_replace('@#?',' ',$sousChain));  
}

echo secretMessage("0@sn9sirppa@#?ia'jgtvryko1");  

--  --
J'ai appris toutes les ficelles des strings

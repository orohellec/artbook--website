<?php

require("simple_html_dom.php");

$worksData = [];

for ($i = 1; $i <= 15; $i++) {
  $html = file_get_html("./oeuvre-{$i}.html");

  $workTitle = $html->find('h1')[0]->plaintext;
  $artistName = $html->find('.description')[0]->plaintext;
  $description = $html->find('.description-complete')[0]->plaintext;
  $imagePath = $html->find('img')[1]->src;

  $workData = (object) array(
    'workTitle' => $workTitle,
    'artistName' => $artistName,
    'description' => trim($description),
    'imagePath' => $imagePath
  );

  array_push($worksData, $workData);
}

$worksDataJson = json_encode($worksData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

$worksDataFile = fopen("./data/works.json", "w");
fwrite($worksDataFile, $worksDataJson);

?>
<?php

require("simple_html_dom.php");

$worksData = [];

for ($i = 1; $i <= 15; $i++) {
  $html = file_get_html("./oeuvre-{$i}.html");

  $title = $html->find('h1')[0]->plaintext;
  $artistName = $html->find('.description')[0]->plaintext;
  $description = $html->find('.description-complete')[0]->plaintext;
  $imagePath = $html->find('img')[1]->src;

  $workData = (object) array(
    'title' => $title,
    'artistName' => $artistName,
    'description' => trim($description),
    'imagePath' => $imagePath
  );

  array_push($worksData, $workData);
}

file_put_contents('./data/works.php', var_export($worksData, true));

?>
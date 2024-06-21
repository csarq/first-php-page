<?php

const API_URL = 'https://whenisthenextmcufilm.com/api';
# initialise a new curl session; ch = curl handle
$ch = curl_init(API_URL);

// Indicate that we want to get the request response and not display it on the screen
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* execute the request 
and store the response 
*/

$result = curl_exec($ch);

//an alternative way is to use file_get_contents
// $result = file_get_contents(API_URL);

$data = json_decode($result, true);
curl_close($ch);



?>

<head>
  <title>The next Marvel film</title>
  <meta name = "description" content="The next Marvel film" />
  <meta name = "viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Centered viewport --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>

</head>

<main>
  <pre style="font-size: 10px; overflow: scroll;"><?= var_dump($data); ?></pre>
    
  <section>
    <img src="<?= $data["poster_url"]; ?> "width="200" alt="Poster of <?=$data["title"]; ?>"
    style="border-radius: 16px;" />
    
  </section>

  <hgroup>
    <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?></h3>
    <p>Fecha de estreno: <?=$data["release_date"];?> </p>
    <p>La siguiente es: <?= $data["following_production"] ["title"]; ?> </p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>
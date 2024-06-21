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
  <title>Discover the next Marvel film</title>
  <meta name = "description" content="Discover the next Marvel film" />
  <meta name = "viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Centered viewport --> 


</head>

<main>
<h1>Discover the next Marvel film</h1>    
  <section>
    <img src="<?= $data["poster_url"]; ?> "alt="Poster of <?=$data["title"]; ?>"
    style="border-radius: 16px;" />
    
  </section>

  <hgroup>
    <h3><?= $data["title"]; ?> will be out in <?= $data["days_until"]; ?> days.</h3>
    <p>Release date: <?=$data["release_date"];?> </p>
    <p>The following release is: <?= $data["following_production"] ["title"]; ?> </p>
  </hgroup>
</main>

<style>

:root {
  --max-width: 800px; /* Adjust as needed */
  --main-bg: #f0f0f0;  /* Light background */
  --dark-bg: #222;    /* Dark background */
  --text-color: #333;  /* Dark text */
  --light-text: #f0f0f0; /* Light text */
}

/* General styles */
body {
  font-family: sans-serif;
  text-align: center;
  padding: 20px;
  background-color: var(--main-bg); /* Light mode background */
  color: var(--text-color);           /* Light mode text color */
}

@media (prefers-color-scheme: dark) { 
  body {
    background-color: var(--dark-bg); /* Dark mode background */
    color: var(--light-text);           /* Dark mode text color */
  }
}

main {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 30px;
  border-radius: 16px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
  margin-bottom: 20px;
}

h3 {
  margin-top: 25px; 
}

section {
  margin-bottom: 20px;
}

img {
  max-width: 100%;
  height: 50%;
  display: block;
  margin: 0 auto;
}


/* Responsive adjustments */
@media (max-width: 600px) {
  main {
    padding: 20px; 
  }

  h1 {
    font-size: 1.8rem; 
  }
}

</style>
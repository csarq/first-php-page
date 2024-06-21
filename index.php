<?php
$name = 'Catherine';
$name = 'José';
$isDev = true;
$faveAnimal = 'rabbit';
$age = 2;

$isOld = $age > 28;

define('logo_url', 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');


$output = "Hola $name, con una $faveAnimal ";

$outputAge = match (true) {
$age < 3 => "Eres un bebé",
$age < 10 => "Eres un niño",
};

$bestLanguages = ["PHP", "JavaScript", "Python", "Java", "C#"];

?>

<ul>
  <?php foreach ($bestLanguages as $language) : ?> 
    <li><?= $language ?></li>
    <?php endforeach; ?>
</ul>
<h3>El mejor lenguaje es <?= $bestLanguages[3] ?></h3>

<h1>
<?= $outputAge ?>

</h1>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>
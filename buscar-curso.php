<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use LuizMoura\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;



    $client = new Client(['base_uri' => 'https://www.alura.com.br/']);
    $crawler  = new Crawler();
    $buscador = new Buscador($client,$crawler);

    $cursos = $buscador->buscar(url: '/cursos-online-programacao/php');

    foreach ($cursos as $curso){
        echo $curso . PHP_EOL;
    }



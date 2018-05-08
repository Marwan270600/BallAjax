<?php

namespace htl3r\ajaxballs;
require_once "vendor/autoload.php";
use marwan\libary\AbstractBall;
use marwan\libary\basketball;
use marwan\libary\volleyball;
use marwan\libary\fußball;


$ball1 = new Fußball("WM-Ball-2014",20, "Leder" );


$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename(__DIR__ . '/Templates/BallListe.html');

$view->assignMultiple(
    array(
        "ball1" => $ball1
    )


);

$output = $view->render();

echo $output;
?>
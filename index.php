<?php

require_once "./vendor/autoload.php";


use Baelle\BallTypes\AbstractBall;
use Baelle\BallTypes\ball;

$ball[] = new ball("Fußball", 40.5,"Gummi");
$ball[] = new ball("Basketball", 60, "Plastik");




$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename(__DIR__ . '/Templates/BallListe.html');

$view->assignMultiple(
    array(
        "Balls" => $ball
    )
);

$output = $view->render();

echo $output;
?>
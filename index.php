<?php

require "./vendor/autoload.php";



use Baelle\ball;

$ball[] = new Ball();
$ball[] = new Ball();




$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename(__DIR__ . '/Templates/BallListe.html');

$view->assignMultiple(
    array(
        "Baelle" => $ball
    )
);

$output = $view->render();

echo $output;
?>
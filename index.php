<?php


require_once "./vendor/autoload.php";

require_once  "Baelle\BallTypes\AbstractBall.php";
require_once  "Baelle\BallTypes\ball.php";
include  "Baelle\BallTypes\AbstractBall.php";
include  "Baelle\BallTypes\ball.php";





$balls = new ball("Fußball", 40.5,"Gummi");

$balls->getName();

$zahl = 50;


        $myBall[] = [$balls->getName(),
                      $balls->getDurchmesser(),
                      $balls->getMaterial()];




$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename(__DIR__ . '/Templates/BallListe.html');

$view->assignMultiple(
    array(
        "Balls" => $myBall
    )


);

$output = $view->render();

echo $output;
?>
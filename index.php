<?php


require_once "vendor/autoload.php";
use Endroid\QrCode\QrCode;

use marwan\libary\BallTypes\AbstractBall;
use marwan\libary\BallTypes\basketball;
use marwan\libary\BallTypes\volleyball;
use marwan\libary\BallTypes\fußball;


$ball1[] = new Fußball("WM-Ball-2014",20, "Leder" );
$wmBall = new Fußball("WM-Ball-2018",20, "Leder" );
$qrCode = new QrCode($wmBall->getName());

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

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
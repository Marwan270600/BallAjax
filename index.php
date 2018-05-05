<?php

require "./vendor/autoload.php";

use

use Baelle\ball;

$ball[] = new Ball();
$ball[] = new Ball();




$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename

$output = $view->render();

echo $output;
?>
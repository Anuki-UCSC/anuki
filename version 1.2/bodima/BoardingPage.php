<?php

require 'Controller/BoardingPostController.php';

$BoardingPostController = new BoardingPostController();


//Output page data
$title = 'Boarding Pages';
$content = $BoardingPostController->CreateBoardingPages('3');


include 'Template.php';

?>
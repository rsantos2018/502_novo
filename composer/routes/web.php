<?php

$app->get('/', function(){

	return \Reginaldo\Controller\Action\Say::hello();
});
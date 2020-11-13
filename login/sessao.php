<?php

session_start();

if ( !isset($_SESSION['login']) ) {

	header('Location: /senac-tsi-php-2020-2/sessao/');
} 
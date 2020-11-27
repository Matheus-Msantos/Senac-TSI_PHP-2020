<?php

session_start();

if ( !isset($_SESSION['login']) ) {

	header('Location: /senac-tsi_php/sessao/');
} 
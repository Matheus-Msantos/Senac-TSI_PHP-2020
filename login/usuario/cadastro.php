<?php

require 'model/dados.php';

if ( isset($_POST['cadastrar']) ) { 

	require 'controller/consist_cadastro.php';
}

include 'view/cadastro_tpl.php';
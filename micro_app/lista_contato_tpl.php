<meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>

    <a href="./contato.html">+ Novo contato</a>
    <br><br>
    <table border=1>
        <tr>
            <td>Id</td><td>Nome</td><td>Whatsapp</td><td>Ação</td>
        </tr>
        <tr>
            <?php
                if (count($tabela) > 0){
                    foreach ($tabela as $id => $reg){
                        echo"<tr>
                                <td>$id</td>   
                                <td>{$reg['nome']}</td>    
                                <td>{$reg['whatsapp']}</td>  
                                <td><a href='apaga_contato.php?id=$id'>Apagar</a></td>     
                                <td><a href='edita_contato.php?id=$id'>Editar</a></td>      
                            </tr>";
                    }
                }else{
                    echo "<tr>
                            <td colspan='3'> Não há dados</td>
                        </tr>";
                }
            ?>
        </tr>
    </table>
</html>
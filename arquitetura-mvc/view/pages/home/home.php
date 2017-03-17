<?php

#exemplos de chamadas
 // <link rel="stylesheet" href="view/assets/css/reset.css" type="text/css">
 // <script src="view/assets/js/jquery.js"></script>
 // <img src="view/assets/img/logo.png" alt="Logotipo">

#representação da view home apresentando dados da tabela Base
for($i = 0; $i < count($select_base_data); $i++){

    echo "Valor {$i}: {$select_base_data[$i]['base_name']}<br/>";

}
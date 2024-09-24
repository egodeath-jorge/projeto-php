<title>document</title>
</head>

<body>
    <h1>
        <código HTML>
    </h1>

    <?php
    $num1;
    $num2;

    $num1 = 2;
    $num2 = 5;

    $soma = $num1 + $num2;

    echo ("<h1>" . $soma . "</h1");

    $$num1 = 2;
    $$num2 = 5;
    $SOMA = $$num1 + $$num2;
    $nome = "luiz";
    $sobrenome = "henrique";
    $nomeCompleto = "$$nome $$sobrenome";
    echo ("<h1>" . $nomeCompleto . "</h1>");

    $idade = 20;

    if ($idade < 18) {
        echo ("voto obrigatório");
    }
    while ($idade < 50) {
        echo ($idade);
        $idade++;
    }
    while ($idade < 50) {
        echo ($idade);
        $idade++;
    }

    $i = 0;
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2! = 0)
        echo ("$i<br>");
    } 

    $i
    
    $estados = array ("MG" , "SP" , "RJ");
    
    $total = count($estados);

    for ($i = 0;$i <3;$i++){
        echo ("$estados[$i] <br>");
    }
    
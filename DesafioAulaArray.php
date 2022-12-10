<?php

//Array associativo
$array = [
    'dados1' => [
        'nome' => 'Alessandra',
        'sobrenome' => ' Nascimento <br>',
        'idade' => 26,
        'endereco' => [
            'rua' => 'Rua Manoel Correia',
            'numero' => 238,
            'bairro' => 'Freguesia do Ó'
        ],
        'profissão' => 'Analista de TI Júnior'
    ],

    'dados2' => [
        'nome' => 'Lucas',
        'idade' => 17,
        'endereco' => [
            'rua' => 'Rua Augusto Perroni',
            'numero' => 671,
            'bairro' => 'Butantã'
        ],
        'profissão' => 'estudante'
    ],


    'dados3' => [
        'nome' => 'Fernando',
        'sobrenome' => 'Souza <br>',
        'idade' => 35,
        'endereco' => [
            'rua' => 'Rua Augusto Perroni',
            'numero' => 671,
            'bairro' => 'Butantã'
        ],
        'profissão' => 'estudante'
    ]
];


foreach ($array as $chave=>$valor){

    echo 'Nome: '.$valor['nome'].= $valor['sobrenome'] ?? ''.'<br>';
    echo 'Idade: '.($valor['idade'] < 18 ? 'Menor de idade, '.$valor['idade'].' anos' : 'Maior de idade, '.$valor['idade'].' anos').'<br>';
    echo '<br>';
};


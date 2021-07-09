<?php

$funcionario1 = 
[
    'Nome' => 'Heron',
    'Idade' => '19',
    'CPF' => '12345678'
];

$funcionario2 = 
[
    'Nome' => 'Jose',
    'Idade' => '22',
    'CPF' => '78456123'
];

$funcionario3 = 
[
    'Nome' => 'Henrrique',
    'Idade' => '65',
    'CPF' => '96385241'
];

$empresa =  [$funcionario1,$funcionario2,$funcionario3];

foreach ($empresa as $funcionarios){
    ['Nome' => $nome, 'Idade' => $idade, 'CPF' => $cpf] = $funcionarios;
    echo "O nome do funcionario e: $nome a sua  idade e: $idade e seu CPF e: $cpf".PHP_EOL;

}
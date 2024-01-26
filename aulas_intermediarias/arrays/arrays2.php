<?php

// ARRAYS MULTIDIMENSIONAIS

$empresa = [
    'adiministração' => [
        'João administrador',
        'Carlos Sócio'
    ],
    'contabilidade' => [
        'Mariana',
        'Joaquim',
        'Antonio'
    ],
    'armazem' => [
        'gestores' => [
            'Carlos',
            'Marcos'
        ],
        'operadores' => [
            'Fernando',
            'Manuel',
            'Luis',
            'Ricardo'
        ]
    ],
    'comerciais' => [
        'lisboa' => [
            'Joao Miguel',
            'Carlos Santos'
        ],
        'porto' => [
            'Marco Antonio',
            'Sergio Santos'
        ],
        'coimbra' => [
            'Maria Silva'
        ]
    ]
];

print_r($empresa['comerciais']['porto']);
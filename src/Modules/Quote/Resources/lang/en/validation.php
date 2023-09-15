<?php

return [

    'patient_id' => [
        'integer'   => 'O paciente informado é inválido (1)',
        'exists'    => 'O paciente informado é inválido (2)',
    ],

    'quote_items' => [
        'required' => 'Ao menos 1 item do orçamento é obrigatório',
    ],
    'quote_items_plan_id' => [
        'required' => 'O plano é obrigatório',
        'exists' => 'O plano é inválido',
    ],
    'quote_items_plan_expertise_procedure_id' => [
        'required' => 'O tratamento do orçamento é obrigatório',
        'exists' => 'O tratamento do orçamento é inválido',
    ],
    'quote_items_user_id' => [
        'required' => 'O dentista do orçamento é obrigatório',
        'exists' => 'O dentista do orçamento é inválido',
    ],
    'quote_items_tooth_id' => [
        'required' => 'O dente/região do orçamento é obrigatório',
        'exists' => 'O dente/região do orçamento é inválido',
    ],
    'quote_items_price' => [
        'required' => 'O valor do tratamento é obrigatório',
        'exists' => 'O valor do tratamento é inválido',
    ],
];

<?php

return [

    'referer_id' => [
        'integer'   => 'Quem indicou o paciente é inválido',
        'exists'    => 'Quem indicou o paciente é inválido (você tem permissão para indicar pacientes de outras empresas?)',
    ],

    'patient_documents' => [
        'required' => 'Ao menos 1 documento do paciente é obrigatório',
    ],
    'patient_documents_name' => [
        'required' => 'O tipo de documento é obrigatório',
    ],
    'patient_documents_value' => [
        'required' => 'O número do documento é obrigatório',
    ],

    'patient_phones_number' => [
        'required' => 'O número do telefone é inválido',
    ],

    'patient_sponsor_nome' => [
        'required' => 'O nome do responsável pelo paciente é obrigatório',
    ],
    'patient_sponsor_document_type' => [
        'required' => 'O tipo de documento do responsável pelo paciente é obrigatório',
    ],
    'patient_sponsor_document_number' => [
        'required' => 'O número do documento do responsável pelo paciente é obrigatório',
    ],

    'patient_plan_plan_id' => [
        'required'  => 'Quando informar os dados de um plano, é obrigatório informar o plano',
        'exists'    => 'O ID do plano é inválido (você tem permissão para indicar planos de outras empresas?)',
    ],
];

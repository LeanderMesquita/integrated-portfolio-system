<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'O campo ":attribute" deve ser aceito.',
    'accepted_if' => 'O campo ":attribute" deve ser aceito quando :other for :value.',
    'active_url' => 'O campo ":attribute" não é uma URL válida.',
    'after' => 'O campo ":attribute" deve ser uma data posterior a :date.',
    'after_or_equal' => 'O campo ":attribute" deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O campo ":attribute" deve conter apenas letras.',
    'alpha_dash' => 'O campo ":attribute" deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O campo ":attribute" deve conter apenas letras e números.',
    'array' => 'O campo ":attribute" deve ser um array.',
    'ascii' => 'O campo ":attribute" deve conter apenas caracteres alfanuméricos de um byte e símbolos.',
    'before' => 'O campo ":attribute" deve ser uma data anterior a :date.',
    'before_or_equal' => 'O campo ":attribute" deve ser uma data anterior ou igual a :date.',
    'between' => [
        'array' => 'O campo ":attribute" deve ter entre :min e :max itens.',
        'file' => 'O campo ":attribute" deve ter entre :min e :max kilobytes.',
        'numeric' => 'O campo ":attribute" deve ter entre :min e :max.',
        'string' => 'O campo ":attribute" deve ter entre :min e :max caracteres.',
    ],
    'boolean' => 'O campo ":attribute" deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo de confirmação ":attribute" não foi preenchido corretamente.',
    'current_password' => 'A senha atual está incorreta.',
    'date' => 'O campo ":attribute" não é uma data válida.',
    'date_equals' => 'O campo ":attribute" deve ser uma data igual a :date.',
    'date_format' => 'O campo ":attribute" não está no formato :format.',
    'decimal' => 'O campo ":attribute" deve ter :decimal casas decimais.',
    'declined' => 'O campo ":attribute" deve ser recusado.',
    'declined_if' => 'O campo ":attribute" deve ser recusado quando :other for :value.',
    'different' => 'Os campos ":attribute" e ":other" devem ser diferentes.',
    'digits' => 'O campo ":attribute" deve ter :digits dígitos.',
    'digits_between' => 'O campo ":attribute" deve ter entre :min e :max dígitos.',
    'dimensions' => 'O campo ":attribute" possui dimensões de imagem inválidas.',
    'distinct' => 'O campo ":attribute" possui um valor duplicado.',
    'doesnt_end_with' => 'O campo ":attribute" não pode terminar com um dos seguintes: :values.',
    'doesnt_start_with' => 'O campo ":attribute" não pode começar com um dos seguintes: :values.',
    'email' => 'O campo ":attribute" deve conter um e-mail válido.',
    'ends_with' => 'O campo ":attribute" deve terminar com um dos seguintes: :values.',
    'enum' => 'A opção :attribute selecionada é inválida.',
    'exists' => 'A opção selecionada para ":attribute" é inválida.',
    'file' => 'O campo ":attribute" deve ser um arquivo.',
    'filled' => 'O campo ":attribute" deve ter um valor.',
    'gt' => [
        'array' => 'O campo ":attribute" deve ter mais de :value itens.',
        'file' => 'O campo ":attribute" deve ter mais de :value kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser maior que :value.',
        'string' => 'O campo ":attribute" deve ter mais de :value caracteres.',
    ],
    'gte' => [
        'array' => 'O campo ":attribute" deve ter :value itens ou mais.',
        'file' => 'O campo ":attribute" deve ser maior ou igual a :value kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser maior ou igual a :value.',
        'string' => 'O campo ":attribute" deve ter :value caracteres ou mais.',
    ],
    'image' => 'O campo ":attribute" deve ser uma imagem.',
    'in' => 'A opção selecionada para ":attribute" é inválida.',
    'in_array' => 'O campo ":attribute" não existe em :other.',
    'integer' => 'O campo ":attribute" deve ser um número inteiro.',
    'ip' => 'O campo ":attribute" deve conter um endereço IP válido.',
    'ipv4' => 'O campo ":attribute" deve conter um endereço IPv4 válido.',
    'ipv6' => 'O campo ":attribute" deve conter um endereço IPv6 válido.',
    'json' => 'O campo ":attribute" deve ser uma string JSON válida.',
    'lowercase' => 'O campo ":attribute" deve estar em minúsculas.',
    'lt' => [
        'array' => 'O campo ":attribute" deve ter menos de :value itens.',
        'file' => 'O campo ":attribute" deve ser menor que :value kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser menor que :value.',
        'string' => 'O campo ":attribute" deve ter menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'O campo ":attribute" não deve ter mais de :value itens.',
        'file' => 'O campo ":attribute" deve ser menor ou igual a :value kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser menor ou igual a :value.',
        'string' => 'O campo ":attribute" deve ter :value caracteres ou menos.',
    ],
    'mac_address' => 'O campo ":attribute" deve conter um endereço MAC válido.',
    'max' => [
        'array' => 'O campo ":attribute" não deve ter mais de :max itens.',
        'file' => 'O campo ":attribute" não deve ser maior que :max kilobytes.',
        'numeric' => 'O campo ":attribute" não deve ser maior que :max.',
        'string' => 'O campo ":attribute" não deve ter mais de :max caracteres.',
    ],
    'max_digits' => 'O campo ":attribute" não deve ter mais de :max dígitos.',
    'mimes' => 'O campo ":attribute" deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo ":attribute" deve ser um arquivo do tipo: :values.',
    'min' => [
        'array' => 'O campo ":attribute" deve ter pelo menos :min itens.',
        'file' => 'O campo ":attribute" deve ter pelo menos :min kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser no mínimo :min.',
        'string' => 'O campo ":attribute" deve ter pelo menos :min caracteres.',
    ],
    'min_digits' => 'O campo ":attribute" deve ter pelo menos :min dígitos.',
    'missing' => 'O campo ":attribute" deve estar ausente.',
    'missing_if' => 'O campo ":attribute" deve estar ausente quando :other for :value.',
    'missing_unless' => 'O campo ":attribute" deve estar ausente a menos que :other seja :value.',
    'missing_with' => 'O campo ":attribute" deve estar ausente quando :values estiver presente.',
    'missing_with_all' => 'O campo ":attribute" deve estar ausente quando :values estiverem presentes.',
    'multiple_of' => 'O campo ":attribute" deve ser um múltiplo de :value.',
    'not_in' => 'A opção selecionada para ":attribute" é inválida.',
    'not_regex' => 'O formato :attribute é inválido.',
    'numeric' => 'O campo ":attribute" deve ser um número.',
    'password' => [
        'letters' => 'O campo ":attribute" deve conter pelo menos uma letra.',
        'mixed' => 'O campo ":attribute" deve conter pelo menos uma letra maiúscula e uma letra minúscula.',
        'numbers' => 'O campo ":attribute" deve conter pelo menos um número.',
        'symbols' => 'O campo ":attribute" deve conter pelo menos um símbolo (!@#$).',
        'uncompromised' => 'O ":attribute" fornecido apareceu em uma violação de dados. Por favor, escolha um ":attribute" diferente.',
    ],
    'present' => 'O campo ":attribute" deve estar presente.',
    'prohibited' => 'O campo ":attribute" é proibido.',
    'prohibited_if' => 'O campo ":attribute" é proibido quando :other for :value.',
    'prohibited_unless' => 'O campo ":attribute" é proibido a menos que :other esteja em :values.',
    'prohibits' => 'O campo ":attribute" proíbe que :other esteja presente.',
    'regex' => 'O formato ":attribute" é inválido.',
    'required' => 'O campo ":attribute" não pode ficar em branco.',
    'required_array_keys' => 'O campo ":attribute" deve conter entradas para: :values.',
    'required_if' => 'O campo ":attribute" é obrigatório quando :other for :value.',
    'required_if_accepted' => 'O campo ":attribute" é obrigatório quando :other for aceito.',
    'required_unless' => 'O campo ":attribute" é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O campo ":attribute" é obrigatório quando :values estiver presente.',
    'required_with_all' => 'O campo ":attribute" é obrigatório quando :values estiverem presentes.',
    'required_without' => 'O campo ":attribute" é obrigatório quando :values não estiver presente.',
    'required_without_all' => 'O campo ":attribute" é obrigatório quando nenhum dos :values estiver presente.',
    'same' => 'Os campos ":attribute" e ":other" devem ser iguais.',
    'size' => [
        'array' => 'O campo ":attribute" deve conter :size itens.',
        'file' => 'O campo ":attribute" deve ter :size kilobytes.',
        'numeric' => 'O campo ":attribute" deve ter :size.',
        'string' => 'O campo ":attribute" deve ter :size caracteres.',
    ],
    'starts_with' => 'O campo ":attribute" deve começar com um dos seguintes: :values.',
    'string' => 'O campo ":attribute" deve ser uma string.',
    'timezone' => 'O campo ":attribute" deve ser um fuso horário válido.',
    'unique' => 'O ":attribute" já está em uso.',
    'uploaded' => 'O upload do arquivo ":attribute" falhou.',
    'uppercase' => 'O campo ":attribute" deve estar em maiúsculas.',
    'url' => 'O campo ":attribute" deve ser uma URL válida.',
    'ulid' => 'O campo ":attribute" deve ser um ULID válido.',
    'uuid' => 'O campo ":attribute" deve ser um UUID válido.',
    

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

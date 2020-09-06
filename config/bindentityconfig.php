<?php
/**
Insert the doctrine entities in the low array in the format:
"entity" => "namespace"
 */
return [
    "entity" => [
        "empresa" => [
            "namespace" => \App\Modules\empresas\Domain\Model\Empresa::class,
            "parameterRouterEntityId" => ""
        ],
        "vale_transporte" => [
            "namespace" => \App\Modules\beneficio\Domain\Model\ValeTransporte::class,
            "parameterRouterEntityId" => "beneficio"
        ],
    ]
];

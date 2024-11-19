<?php

declare(strict_types=1);

return [
    'fields' => [
        'domain' => ['label' => 'Dominio'],
        'domains' => ['label' => 'Domini'],
        'list' => ['label' => 'Lista Domini'],
        'create' => ['label' => 'Crea Dominio'],
        'edit' => ['label' => 'Modifica Dominio'],
        'destroy' => ['label' => 'Elimina Dominio'],
        'name' => ['label' => 'Nome'],
    ],
    'actions' => [
        'domain_created' => 'Dominio creato con successo',
        'domain_updated' => 'Dominio aggiornato con successo',
        'domain_deleted' => 'Dominio eliminato con successo',
        'confirm_delete' => 'Sei sicuro di voler eliminare questo dominio?',
        'no_records' => 'Nessun dominio trovato',
        'invalid_domain' => 'Dominio non valido',
        'domain_exists' => 'Questo dominio esiste già',
        'primary_domain' => 'Dominio Principale',
        'set_primary' => 'Imposta come Principale',
        'domain_set_primary' => 'Dominio impostato come principale con successo',
    ],
];

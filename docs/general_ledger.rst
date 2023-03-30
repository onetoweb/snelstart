.. _top:
.. title:: General ledger

`Back to index <index.rst>`_

==============
General ledger
==============

.. contents::
    :local:


List general ledgers
````````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->generalLedger->list($skip, $top, $filter);


Get general ledger
``````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->generalLedger->get($id);


Create general ledger
`````````````````````

.. code-block:: php
    
    $result = $client->generalLedger->create([
        'modifiedOn' => 'string',
        'omschrijving' => 'string',
        'kostenplaatsVerplicht' => true,
        'rekeningCode' => 'Balans',
        'nonactief' => true,
        'nummer' => 0,
        'grootboekfunctie' => 'Diversen',
        'grootboekRubriek' => 'string',
        'rgsCode' => [
            [
                'versie' => 'string',
                'rgsCode' => 'string'
            ]
        ],
        'btwSoort' => [
            'Geen'
        ],
        'vatRateCode' => 'string',
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


`Back to top <#top>`_
.. _top:
.. title:: Bank entries

`Back to index <index.rst>`_

============
Bank entries
============

.. contents::
    :local:


List bank entries
`````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->bankEntry->list($skip, $top, $filter);


Get bank entry
``````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->bankEntry->get($id);


Create bank entry
`````````````````

.. code-block:: php
    
    $result = $client->bankEntry->create([
        'modifiedOn' => 'string',
        'datum' => 'string',
        'markering' => true,
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'omschrijving' => 'string',
        'grootboekBoekingsRegels' => [
            [
                'omschrijving' => 'string',
                'grootboek' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'kostenplaats' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'debet' => 0,
                'credit' => 0,
                'btwSoort' => 'Geen'
            ]
        ],
        'inkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'debet' => 0,
                'credit' => 0
            ]
        ],
        'verkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'debet' => 0,
                'credit' => 0
            ]
        ],
        'btwBoekingsregels' => [
            [
                'debet' => 0,
                'credit' => 0,
                'type' => 'TeVorderenBtwType',
                'tarief' => 'Hoog'
            ]
        ],
        'bedragUitgegeven' => 0,
        'bedragOntvangen' => 0,
        'dagboek' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update bank entry
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->bankEntry->update($id, [
        'modifiedOn' => 'string',
        'datum' => 'string',
        'markering' => true,
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'omschrijving' => 'string',
        'grootboekBoekingsRegels' => [
            [
                'omschrijving' => 'string',
                'grootboek' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'kostenplaats' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'debet' => 0,
                'credit' => 0,
                'btwSoort' => 'Geen'
            ]
        ],
        'inkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'debet' => 0,
                'credit' => 0
            ]
        ],
        'verkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'debet' => 0,
                'credit' => 0
            ]
        ],
        'btwBoekingsregels' => [
            [
                'debet' => 0,
                'credit' => 0,
                'type' => 'TeVorderenBtwType',
                'tarief' => 'Hoog'
            ]
        ],
        'bedragUitgegeven' => 0,
        'bedragOntvangen' => 0,
        'dagboek' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete bank entry
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->bankEntry->delete($id);


`Back to top <#top>`_
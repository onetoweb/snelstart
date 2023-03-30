.. _top:
.. title:: Cash entries

`Back to index <index.rst>`_

============
Cash entries
============

.. contents::
    :local:


List cash entries
`````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->cashEntry->list($skip, $top, $filter);


Get cash entry
``````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->cashEntry->get($id);


Create cash entry
`````````````````

.. code-block:: php
    
    $result = $client->cashEntry->create([
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


Update cash entry
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->cashEntry->update($id, [
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


Delete cash entry
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->cashEntry->delete($id);


`Back to top <#top>`_
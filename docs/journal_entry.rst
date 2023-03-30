.. _top:
.. title:: Journal entries

`Back to index <index.rst>`_

===============
Journal entries
===============

.. contents::
    :local:


Get journal entry
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->journalEntry->get($id);


Create journal entry
````````````````````

.. code-block:: php
    
    $result = $client->journalEntry->create([
        'modifiedOn' => 'string',
        'datum' => 'string',
        'markering' => true,
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'omschrijving' => 'string',
        'memoriaalBoekingsRegels' => [
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
                'credit' => 0
            ]
        ],
        'inkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'bedrag' => 0
            ]
        ],
        'verkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'bedrag' => 0
            ]
        ],
        'dagboek' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update journal entry
````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->journalEntry->update($id, [
        'modifiedOn' => 'string',
        'datum' => 'string',
        'markering' => true,
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'omschrijving' => 'string',
        'memoriaalBoekingsRegels' => [
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
                'credit' => 0
            ]
        ],
        'inkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'bedrag' => 0
            ]
        ],
        'verkoopboekingBoekingsRegels' => [
            [
                'boekingId' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'bedrag' => 0
            ]
        ],
        'dagboek' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete journal entry
````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->journalEntry->delete($id);


`Back to top <#top>`_
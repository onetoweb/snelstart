.. _top:
.. title:: Sale entries

`Back to index <index.rst>`_

============
Sale entries
============

.. contents::
    :local:


Get sale entry
``````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleEntry->get($id);


Create sale entry
`````````````````

.. code-block:: php
    
    $result = $client->saleEntry->create([
        'modifiedOn' => 'string',
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'markering' => true,
        'factuurdatum' => 'string',
        'factuurnummer' => 'string',
        'klant' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'omschrijving' => 'string',
        'factuurbedrag' => 0,
        'betalingstermijn' => 0,
        'eenmaligeIncassoMachtiging' => [
            'kenmerk' => 'string',
            'omschrijving' => 'string',
            'datum' => 'string'
        ],
        'doorlopendeIncassoMachtiging' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'boekingsregels' => [
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
                'bedrag' => 0,
                'btwSoort' => 'Geen'
            ]
        ],
        'btw' => [
            [
                'btwSoort' => 'Geen',
                'btwBedrag' => 0
            ]
        ],
        'documents' => [
            [
                'parentIdentifier' => '00000000-0000-0000-0000-000000000000',
                'fileName' => 'string',
                'readOnly' => true,
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update sale entry
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleEntry->update($id, [
        'modifiedOn' => 'string',
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'markering' => true,
        'factuurdatum' => 'string',
        'factuurnummer' => 'string',
        'klant' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'omschrijving' => 'string',
        'factuurbedrag' => 0,
        'betalingstermijn' => 0,
        'eenmaligeIncassoMachtiging' => [
            'kenmerk' => 'string',
            'omschrijving' => 'string',
            'datum' => 'string'
        ],
        'doorlopendeIncassoMachtiging' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'boekingsregels' => [
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
                'bedrag' => 0,
                'btwSoort' => 'Geen'
            ]
        ],
        'btw' => [
            [
                'btwSoort' => 'Geen',
                'btwBedrag' => 0
            ]
        ],
        'documents' => [
            [
                'parentIdentifier' => '00000000-0000-0000-0000-000000000000',
                'fileName' => 'string',
                'readOnly' => true,
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete sale entry
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleEntry->delete($id);


`Back to top <#top>`_
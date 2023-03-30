.. _top:
.. title:: Purchase entries

`Back to index <index.rst>`_

================
Purchase entries
================

.. contents::
    :local:


Get purchase entry
``````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->purchaseEntry->get($id);


Create purchase entry
`````````````````````

.. code-block:: php
    
    $result = $client->purchaseEntry->create([
        'modifiedOn' => 'string',
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'markering' => true,
        'factuurdatum' => 'string',
        'factuurnummer' => 'string',
        'leverancier' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'omschrijving' => 'string',
        'factuurbedrag' => 0,
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


Update purchase entry
`````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->purchaseEntry->update($id, [
        'modifiedOn' => 'string',
        'boekstuk' => 'string',
        'gewijzigdDoorAccountant' => true,
        'markering' => true,
        'factuurdatum' => 'string',
        'factuurnummer' => 'string',
        'leverancier' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'omschrijving' => 'string',
        'factuurbedrag' => 0,
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


Delete purchase entry
`````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->purchaseEntry->delete($id);


Create from attachment
``````````````````````

.. code-block:: php
    
    $result = $client->purchaseEntry->createFromAttachment([
        'fileName' => 'string',
        'content' => 'string'
    ]);


Get create from attachment status
`````````````````````````````````

.. code-block:: php
    
    $instanceId = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->purchaseEntry->getCreateFromAttachmentStatus($instanceId);


Ubl
```

.. code-block:: php
    
    $result = $client->purchaseEntry->ubl([
        'fileName' => 'string',
        'content' => 'string',
        'pdfContent' => 'string',
        'forcePersist' => true
    ]);


`Back to top <#top>`_
.. _top:
.. title:: Relations

`Back to index <index.rst>`_

=========
Relations
=========

.. contents::
    :local:


List relations
``````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->relation->list($skip, $top, $filter);


Get relation
````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->get($id);


Create relation
```````````````

.. code-block:: php
    
    $result = $client->relation->create([
        'relatiesoort' => [
            'string'
        ],
        'modifiedOn' => 'string',
        'relatiecode' => 0,
        'naam' => 'string',
        'vestigingsAdres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'correspondentieAdres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'telefoon' => 'string',
        'mobieleTelefoon' => 'string',
        'email' => 'string',
        'btwNummer' => 'string',
        'factuurkorting' => 0,
        'krediettermijn' => 0,
        'bankieren' => true,
        'nonactief' => true,
        'kredietLimiet' => 0,
        'memo' => 'string',
        'kvkNummer' => 'string',
        'oin' => 'string',
        'websiteUrl' => 'string',
        'aanmaningsoort' => 'Nee',
        'offerteEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'bevestigingsEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'factuurEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'aanmaningEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'offerteAanvraagEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'bestellingEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'ublBestandAlsBijlage' => true,
        'iban' => 'string',
        'bic' => 'string',
        'incassoSoort' => 'Geen',
        'factuurRelatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'inkoopBoekingenUri' => 'string',
        'verkoopBoekingenUri' => 'string',
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
        'uri' => 'string',
        'extraVeldenKlant' => [
            [
                'naam' => 'string',
                'waarde' => 'string'
            ]
        ]
    ]);


Update relation
```````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->update($id, [
        'relatiesoort' => [
            'string'
        ],
        'modifiedOn' => 'string',
        'relatiecode' => 0,
        'naam' => 'string',
        'vestigingsAdres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'correspondentieAdres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'telefoon' => 'string',
        'mobieleTelefoon' => 'string',
        'email' => 'string',
        'btwNummer' => 'string',
        'factuurkorting' => 0,
        'krediettermijn' => 0,
        'bankieren' => true,
        'nonactief' => true,
        'kredietLimiet' => 0,
        'memo' => 'string',
        'kvkNummer' => 'string',
        'oin' => 'string',
        'websiteUrl' => 'string',
        'aanmaningsoort' => 'Nee',
        'offerteEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'bevestigingsEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'factuurEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'aanmaningEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'offerteAanvraagEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'bestellingEmailVersturen' => [
            'shouldSend' => true,
            'email' => 'string',
            'ccEmail' => 'string'
        ],
        'ublBestandAlsBijlage' => true,
        'iban' => 'string',
        'bic' => 'string',
        'incassoSoort' => 'Geen',
        'factuurRelatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'inkoopBoekingenUri' => 'string',
        'verkoopBoekingenUri' => 'string',
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
        'uri' => 'string',
        'extraVeldenKlant' => [
            [
                'naam' => 'string',
                'waarde' => 'string'
            ]
        ]
    ]);


Delete relation
```````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->delete($id);


Get custom fields
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->customFields($id);


Update custom fields
````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->updateCustomFields($id, [
        'klantCustomFields' => [
            [
                'name' => 'string',
                'value' => [
                ]
            ]
        ],
        'leverancierCustomFields' => [
            [
                'name' => 'string',
                'value' => [
                ]
            ]
        ]
    ]);


Get continuous direct debit authorizations
``````````````````````````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->continuousDirectDebitAuthorization($id);


Get purchase entries
````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->purchaseEntries($id);


Get sale entries
````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->relation->saleEntries($id);


`Back to top <#top>`_
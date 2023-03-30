.. _top:
.. title:: Invoices

`Back to index <index.rst>`_

========
Invoices
========

.. contents::
    :local:


List invoices
`````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->invoice->list($skip, $top, $filter);


Get invoice
```````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->invoice->get($id);


Create invoice
``````````````

.. code-block:: php
    
    $result = $client->invoice->create([
        'relatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'procesStatus' => 'Order',
        'nummer' => 0,
        'modifiedOn' => 'string',
        'datum' => 'string',
        'krediettermijn' => 0,
        'omschrijving' => 'string',
        'betalingskenmerk' => 'string',
        'incassomachtiging' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'afleveradres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'factuuradres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'verkooporderBtwIngaveModel' => 'Inclusief',
        'kostenplaats' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'regels' => [
            [
                'artikel' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'stuksprijs' => 0,
                'aantal' => 0,
                'kortingsPercentage' => 0,
                'totaal' => 0,
                'extraRegelVelden' => [
                    [
                        'veldNummer' => 0,
                        'omschrijving' => 'string',
                        'waarde' => 'string'
                    ]
                ]
            ]
        ],
        'memo' => 'string',
        'orderreferentie' => 'string',
        'factuurkorting' => 0,
        'verkoopfactuur' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'totaalExclusiefBtw' => 0,
        'totaalInclusiefBtw' => 0,
        'isOfferte' => true,
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update invoice
``````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->invoice->update($id, [
        'relatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'procesStatus' => 'Order',
        'nummer' => 0,
        'modifiedOn' => 'string',
        'datum' => 'string',
        'krediettermijn' => 0,
        'omschrijving' => 'string',
        'betalingskenmerk' => 'string',
        'incassomachtiging' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'afleveradres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'factuuradres' => [
            'contactpersoon' => 'string',
            'straat' => 'string',
            'postcode' => 'string',
            'plaats' => 'string',
            'land' => [
                'id' => '00000000-0000-0000-0000-000000000000',
                'uri' => 'string'
            ]
        ],
        'verkooporderBtwIngaveModel' => 'Inclusief',
        'kostenplaats' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'regels' => [
            [
                'artikel' => [
                    'id' => '00000000-0000-0000-0000-000000000000',
                    'uri' => 'string'
                ],
                'omschrijving' => 'string',
                'stuksprijs' => 0,
                'aantal' => 0,
                'kortingsPercentage' => 0,
                'totaal' => 0,
                'extraRegelVelden' => [
                    [
                        'veldNummer' => 0,
                        'omschrijving' => 'string',
                        'waarde' => 'string'
                    ]
                ]
            ]
        ],
        'memo' => 'string',
        'orderreferentie' => 'string',
        'factuurkorting' => 0,
        'verkoopfactuur' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'totaalExclusiefBtw' => 0,
        'totaalInclusiefBtw' => 0,
        'isOfferte' => true,
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete invoice
``````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->invoice->delete($id);


`Back to top <#top>`_
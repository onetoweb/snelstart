.. _top:
.. title:: Sale orders

`Back to index <index.rst>`_

===========
Sale orders
===========

.. contents::
    :local:


List sale orders
````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->saleOrder->list($skip, $top, $filter);


Get sale order
``````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleOrder->get($id);


Create sale order
`````````````````

.. code-block:: php
    
    $result = $client->saleOrder->create([
        'relatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'procesStatus' => 'Order',
        'nummer' => 0,
        'modifiedOn' => 'string',
        'datum' => 'string',
        'krediettermijn' => 0,
        'geblokkeerd' => true,
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
        'verkoopordersjabloon' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'verkoopOrderStatus' => 'InBehandeling',
        'totaalExclusiefBtw' => 0,
        'totaalInclusiefBtw' => 0,
        'extraHoofdVelden' => [
            [
                'veldNummer' => 0,
                'omschrijving' => 'string',
                'waarde' => 'string'
            ]
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update sale order
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleOrder->update($id, [
        'relatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'procesStatus' => 'Order',
        'nummer' => 0,
        'modifiedOn' => 'string',
        'datum' => 'string',
        'krediettermijn' => 0,
        'geblokkeerd' => true,
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
        'verkoopordersjabloon' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'verkoopOrderStatus' => 'InBehandeling',
        'totaalExclusiefBtw' => 0,
        'totaalInclusiefBtw' => 0,
        'extraHoofdVelden' => [
            [
                'veldNummer' => 0,
                'omschrijving' => 'string',
                'waarde' => 'string'
            ]
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete sale order
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleOrder->delete($id);


Update process status
`````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleOrder->updateProcessStatus($id, [
        'id' => '00000000-0000-0000-0000-000000000000',
        'procesStatus' => 'Order'
    ]);


`Back to top <#top>`_
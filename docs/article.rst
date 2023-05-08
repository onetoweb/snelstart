.. _top:
.. title:: Articles

`Back to index <index.rst>`_

========
Articles
========

.. contents::
    :local:


List articles
`````````````

.. code-block:: php
    
    $relationId = '';
    $skip = 0;
    $top = 50;
    $filter = null;
    $amount = null;
    $result = $client->article->list($relationId, $skip, $top, $filter, $amount);


Get article
```````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->article->get($id);


Create article
``````````````

.. code-block:: php
    
    $result = $client->article->create([
        'artikelcode' => 'string',
        'omschrijving' => 'string',
        'artikelOmzetgroep' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'verkoopprijs' => 0,
        'inkoopprijs' => 0,
        'eenheid' => 'string',
        'modifiedOn' => 'string',
        'relatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'isNonActief' => true,
        'voorraadControle' => true,
        'technischeVoorraad' => 0,
        'vrijeVoorraad' => 0,
        'extraVelden' => [
            [
                'naam' => 'string',
                'waarde' => 'string'
            ]
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update article
``````````````

.. code-block:: php
    
    $result = $client->article->update([
        'artikelcode' => 'string',
        'omschrijving' => 'string',
        'artikelOmzetgroep' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'verkoopprijs' => 0,
        'inkoopprijs' => 0,
        'eenheid' => 'string',
        'modifiedOn' => 'string',
        'relatie' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'isNonActief' => true,
        'voorraadControle' => true,
        'technischeVoorraad' => 0,
        'vrijeVoorraad' => 0,
        'extraVelden' => [
            [
                'naam' => 'string',
                'waarde' => 'string'
            ]
        ],
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete article
``````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->article->delete($id);


Get article custom fields
`````````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->article->getCustomFields($id);


Update article custom fields
````````````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->article->updateCustomFields($id,  [
        [
            'name' => 'string',
            'value' => []
        ]
    ]);


Get article price agreements
````````````````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->article->getPriceAgreements($skip, $top, $filter);


`Back to top <#top>`_
.. _top:
.. title:: Cost centers

`Back to index <index.rst>`_

============
Cost centers
============

.. contents::
    :local:


List cost centers
`````````````````

.. code-block:: php
    
    $result = $client->costCentre->list();


Get cost centre
```````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->costCentre->get($id);


Create cost centre
``````````````````

.. code-block:: php
    
    $result = $client->costCentre->create([
        'omschrijving' => 'string',
        'nonactief' => true,
        'nummer' => 0,
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update cost centre
``````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->costCentre->update($id, [
        'omschrijving' => 'string',
        'nonactief' => true,
        'nummer' => 0,
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete cost centre
``````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->costCentre->delete($id);


`Back to top <#top>`_
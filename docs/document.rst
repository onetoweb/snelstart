.. _top:
.. title:: Documents

`Back to index <index.rst>`_

=========
Documents
=========

.. contents::
    :local:


Get document type
`````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $documenttype = 'inkoopboekingen';
    $result = $client->document->get($documenttype, $id);


Get document
````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->document->get($id);


Create document
```````````````

.. code-block:: php
    
    $documenttype = 'inkoopboekingen';
    $result = $client->document->create($documenttype, [
        'content' => 'string',
        'parentIdentifier' => '00000000-0000-0000-0000-000000000000',
        'fileName' => 'string',
        'readOnly' => true,
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Update document
```````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->document->update($id, [
        'content' => 'string',
        'parentIdentifier' => '00000000-0000-0000-0000-000000000000',
        'fileName' => 'string',
        'readOnly' => true,
        'id' => '00000000-0000-0000-0000-000000000000',
        'uri' => 'string'
    ]);


Delete document
```````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->document->delete($id);


`Back to top <#top>`_
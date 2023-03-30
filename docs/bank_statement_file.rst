.. _top:
.. title:: Bank statement file

`Back to index <index.rst>`_

===================
Bank statement file
===================

.. contents::
    :local:


Create bank statement file
``````````````````````````

.. code-block:: php
    
    $result = $client->bankStatementFile->create([
        [
            'name' => 'string',
            'base64EncodedContent' => 'string'
        ]
    ]);


`Back to top <#top>`_
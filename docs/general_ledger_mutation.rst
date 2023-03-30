.. _top:
.. title:: General ledger mutations

`Back to index <index.rst>`_

========================
General ledger mutations
========================

.. contents::
    :local:


List general ledgers mutations
``````````````````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->generalLedgerMutation->list($skip, $top, $filter);


Get general ledger mutation
```````````````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->generalLedgerMutation->get($id);


`Back to top <#top>`_
.. _top:
.. title:: Sale invoices

`Back to index <index.rst>`_

=============
Sale invoices
=============

.. contents::
    :local:


List sale invoices
``````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->saleInvoice->list($skip, $top, $filter);


List sale invoices (filter last 3 months)
`````````````````````````````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $dateString = (new DateTime())->modify('-3 months')->format(DateTime::ATOM);
    $filter = "FactuurDatum gt datetime'$dateString'";
    $result = $client->saleInvoice->list($skip, $top, $filter);


Get sale invoice
````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleInvoice->get($id);


Ubl
```

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->saleInvoice->ubl($id);


`Back to top <#top>`_
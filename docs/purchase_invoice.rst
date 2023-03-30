.. _top:
.. title:: Purchase invoices

`Back to index <index.rst>`_

=================
Purchase invoices
=================

.. contents::
    :local:


List purchase invoices
``````````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->purchaseInvoice->list($skip, $top, $filter);


`Back to top <#top>`_
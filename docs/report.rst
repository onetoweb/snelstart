.. _top:
.. title:: Column balance

`Back to index <index.rst>`_

==============
Column balance
==============

.. contents::
    :local:


Get column balance
``````````````````

.. code-block:: php
    
    // example: get column balance for the last 10 days
    $start = (new DateTime())->modify('-10 days');
    $end = new DateTime();
    $result = $client->report->columnBalance($start, $end);


Get period balance
``````````````````

.. code-block:: php
    
    // example: get period balance for the last 10 days
    $start = (new DateTime())->modify('-10 days');
    $end = new DateTime();
    $result = $client->report->periodBalance($start, $end);


`Back to top <#top>`_
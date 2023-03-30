.. _top:
.. title:: Item departments

`Back to index <index.rst>`_

================
Item departments
================

.. contents::
    :local:


List item departments
`````````````````````

.. code-block:: php
    
    $skip = 0;
    $top = 50;
    $filter = null;
    $result = $client->itemDepartment->list($skip, $top, $filter);


Get item department
```````````````````

.. code-block:: php
    
    $id = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
    $result = $client->itemDepartment->get($id);


`Back to top <#top>`_
.. title:: Index

===========
Basic Usage
===========

Setup

.. code-block:: php
    
    require 'vendor/autoload.php';
    
    use Onetoweb\Snelstart\{Client, Token};
    
    // param
    $clientKey = 'client_key';
    $subscriptionKey = 'subscription_key';
    
    // setup client
    $client = new Client($clientKey, $subscriptionKey);
    
    // (optional) set update token callback
    $client->setUpdateTokenCallback(function (Token $token) {
        
        // store token
        $_SESSION['token'] = [
            'value' => $token->getValue(),
            'expires' => $token->getExpires()
        ];
    });
    
    if (isset($_SESSION['token'])) {
        
        // load token from storage
        $client->setToken(new Token(
            $_SESSION['token']['value'],
            $_SESSION['token']['expires']
        ));
    }


========
Examples
========

* `Actionprices <actionprice.rst>`_
* `Articles <article.rst>`_
* `Item departments <item_department.rst>`_
* `Authorization <authorization.rst>`_
* `Bank statement file <bank_statement_file.rst>`_
* `Bank entries <bank_entry.rst>`_
* `VAT declarations <vat_declaration.rst>`_
* `VAT rates <vat_rate.rst>`_
* `Company info <company_info.rst>`_
* `Journals <journal.rst>`_
* `Documents <document.rst>`_
* `Echo test <echo_test.rst>`_
* `General ledger <general_ledger.rst>`_
* `General ledger mutations <general_ledger_mutation.rst>`_
* `Purchase entries <purchase_entry.rst>`_
* `Purchase invoices <purchase_invoice.rst>`_
* `Cash entries <cash_entry.rst>`_
* `Cost centers <cost_centre.rst>`_
* `Countries <country.rst>`_
* `Journal entries <journal_entry.rst>`_
* `Quotations <quotation.rst>`_
* `Price agreements <price_agreement.rst>`_
* `Report <report.rst>`_
* `Relations <relation.rst>`_
* `VAT rate definitions <vat_rate_definition.rst>`_
* `VAT rates international <vat_rate_intl.rst>`_
* `Sale entries <sale_entry.rst>`_
* `Sale invoices <sale_invoice.rst>`_
* `Sale orders <sale_order.rst>`_
* `Sale order templates <sale_order_template.rst>`_

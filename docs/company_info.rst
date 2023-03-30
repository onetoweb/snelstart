.. _top:
.. title:: Company info

`Back to index <index.rst>`_

============
Company info
============

.. contents::
    :local:


Get company info
````````````````

.. code-block:: php
    
    $result = $client->companyInfo->get();


Update company info
```````````````````

.. code-block:: php
    
    $result = $client->companyInfo->update([
        'administratieIdentifier' => '00000000-0000-0000-0000-000000000000',
        'administratieNaam' => 'string',
        'bedrijfsnaam' => 'string',
        'contactpersoon' => 'string',
        'adres' => 'string',
        'postcode' => 'string',
        'plaats' => 'string',
        'telefoon' => 'string',
        'mobieleTelefoon' => 'string',
        'fax' => 'string',
        'bankrekeningnummer' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'rechtsvorm' => 'NotSet',
        'btwNummer' => 'string',
        'btwIdentificatieNummer' => 'string',
        'kvKNummer' => 'string',
        'email' => 'string',
        'website' => 'string',
        'vrijeTekst1' => 'string',
        'vrijeTekst2' => 'string',
        'vrijeTekst3' => 'string',
        'vrijeTekst4' => 'string',
        'huidigBoekjaar' => 0,
        'beginmaandFiscaleBoekjaar' => 0,
        'btwAangiftePeriodeSoort' => 'Maand',
        'icpAangiftePeriodeSoort' => 'Maand',
        'btwNummerFiscaleEenheid' => 'string',
        'tussentijdseSuppletiesBerekenen' => true,
        'mapUBLBestanden' => 'string',
        'btwPercentageAangifteKredietbeperking' => 0,
        'markeergedragInlezenBankafschriften' => 'AlleenBelangrijkste',
        'voorkeurenTijdensBoeken' => true,
        'aantalVoorloopnullenGrootboekrekeningen' => 0,
        'kleineOndernemersregeling' => [
            'isKleineOndernemersRegelingActief' => true,
            'maximaalBedragVolledigeVerrekening' => 0,
            'maximaalBedragKleineOndernemersRegeling' => 0
        ],
        'volgendFactuurnummer' => 0,
        'volgendVerkoopordernummer' => 0,
        'volgendContantbonnummer' => 0,
        'volgendInkoopordernummer' => 0,
        'voorraadcontroleOrderinvoer' => true,
        'abonnementOvernemen' => true,
        'kolomGeleverdAutomatischVullen' => true,
        'voorraadkolommenTonenInInkoop' => true,
        'backorderGebruiken' => true,
        'deelleveringOrdersDefaultAan' => true,
        'factuurAlsBijlageVerkoopboeking' => true,
        'tekstregelsOvernemenNaarBackorder' => 'Geen',
        'regelkortingVerkooporder' => 'BerekenenOverRegelBedrag',
        'drempelbedragVerkooporderbeheer' => 0,
        'drempelbedragVerkooporderbeheerMaxDagenUitstel' => 0,
        'verkoopprijsArtikelbestandExclusiefBtw' => true,
        'inkoopprijsArtikelbestandExclusiefBtw' => true,
        'artikelcodeSoort' => 'Numeriek',
        'artikelcodeMaxLengte' => 0,
        'begindatumVoorraadtelling' => 'string',
        'voorraadTonenInZoekvenster' => true,
        'aantalDecimalenArtikelprijzen' => 0,
        'aantalDecimalenArtikelaantallen' => 0,
        'verkooporderVoorraadVanafNiveau' => 'Alle',
        'voorraadSysteem' => 'Fifo',
        'momentVoorraadBijwerken' => 'BijBoekenOntvangst',
        'rekeningTeOntvangenInkoopfacturen' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'dagboekVoorraadverschillen' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'buitenlandseBtwGrootboek' => [
            'id' => '00000000-0000-0000-0000-000000000000',
            'uri' => 'string'
        ],
        'factureerBuitenlandsBtw' => true,
        'factureerBuitenlandsBtwRanges' => [
            [
                'from' => 0,
                'to' => 0
            ]
        ]
    ]);


`Back to top <#top>`_
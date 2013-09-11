<?php

namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait OrganizationalPerson
{
    use Person;

    protected $destinationIndicator;

    protected $facsimileTelephoneNumber;

    protected $internationaliSDNNumber;

    protected $l;

    protected $ou;

    protected $physicalDeliveryOfficeName;

    protected $postOfficeBox;

    protected $postalAddress;

    protected $postalCode;

    protected $preferredDeliveryMethod;

    protected $registeredAddress;

    protected $st;

    protected $street;
    
    protected $teletexTerminalIdentifier;

    protected $telexNumber;

    protected $title;

    protected $x121Address;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\OrganizationalPerson', array(
    'properties' => array(
        'destinationIndicator' => array(
            'type' => 'string'
        ),
        'facsimileTelephoneNumber' => array(
            'type' => 'string'
        ),
        'internationaliSDNNumber' => array(
            'type' => 'string'
        ),
        'l' => array(
            'type' => 'string'
        ),
        'ou' => array(
            'type' => 'string'
        ),
        'physicalDeliveryOfficeName' => array(
            'type' => 'string'
        ),
        'postOfficeBox' => array(
            'type' => 'string'
        ),
        'postalAddress' => array(
            'type' => 'string'
        ),
        'postalCode' => array(
            'type' => 'string'
        ),
        'preferredDeliveryMethod' => array(
            'type' => 'string'
        ),
        'registeredAddress' => array(
            'type' => 'string'
        ),
        'st' => array(
            'type' => 'string'
        ),
        'street' => array(
            'type' => 'string'
        ),
        'teletexTerminalIdentifier' => array(
            'type' => 'string'
        ),
        'telexNumber' => array(
            'type' => 'string'
        ),
        'title' => array(
            'type' => 'string'
        ),
        'x121Address' => array(
            'type' => 'string'
        )
    )
));

<?php

namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait Person
{
    use Top, CommonName;
    
    protected $sn;

    protected $description;

    protected $seeAlso;

    protected $telephoneNumber;

    protected $userPassword;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\Person', array(
    'properties' => array(
        'sn' => array(
            'type' => 'string',
            'required' => true
        ),
        'description' => array(
            'type' => 'string'
        ),
        'seeAlso' => array(
            'type' => 'string'
        ),
        'telephoneNumber' => array(
            'type' => 'string'
        ),
        'userPassword' => array(
            'type' => 'string'
        )
    )
));

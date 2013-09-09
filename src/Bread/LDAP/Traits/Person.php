<?php

namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait Person
{
    use Top;

    protected $cn;

    protected $sn;

    protected $description;

    protected $seeAlso;

    protected $telephoneNumber;

    protected $userPassword;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\Person', array(
    'properties' => array(
        'cn' => array(
            'type' => 'string',
            'required' => true
        ),
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

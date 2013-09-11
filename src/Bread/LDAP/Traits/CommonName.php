<?php
namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait CommonName
{

    protected $cn;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\CommonName', array(
    'properties' => array(
        'cn' => array(
            'required' => true
        )
    )
));

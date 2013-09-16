<?php

namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait Top
{
    use Internal;
    
    protected $objectClass;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\Top', array(
    'properties' => array(
        'objectClass' => array(
            'required' => true,
            'multiple' => true
        )
    )
));

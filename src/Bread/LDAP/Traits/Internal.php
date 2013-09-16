<?php

namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait Internal
{
    protected $createTimestamp;
    protected $modifyTimestamp;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\Top', array(
    'properties' => array(
        'createTimestamp' => array(
            'type' => 'DateTime'
        ),
        'modifyTimestamp' => array(
            'type' => 'DateTime'
        )
    )
));

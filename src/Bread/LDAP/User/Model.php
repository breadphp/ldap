<?php
namespace Bread\LDAP\User;

use Bread\REST;
use Bread\LDAP\Traits\InetOrgPerson;
use Bread\Configuration\Manager as Configuration;

class Model extends REST\Behaviors\ARO\Authenticated
{
    use InetOrgPerson;
}


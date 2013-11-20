<?php
namespace Bread\LDAP\User;

use Bread\REST;
use Bread\REST\Interfaces\RFC2616;
use Bread\Helpers\JSON;
use Bread\Networking\HTTP\Client\Exceptions\NotFound;
use Bread\Networking\HTTP\Client\Exceptions\Forbidden;

class Controller extends REST\Controller implements RFC2616
{
    
    public function getMe($resource)
    {
        if ($this->aro instanceof Model) {
            return $this->get($this->aro);
        }
        return $this->firewall->authenticate('User');
    }
    
    public function controlledResource(array $parameters = array())
    {
        $search = array();
        $options = array();
        foreach ((array) $this->request->query['search'] as $query => $value) {
            switch ($query) {
                default:
                    $search[$query] = $value;
                    break;
            }
        }
        foreach ((array) $this->request->query['options'] as $option => $value) {
            switch ($option) {
                case 'sort':
                    $options[$option] = $value;
                    break;
            }
        }
        foreach ($parameters as $parameter => $value) {
            switch ($parameter) {
                    $search[$parameter] = $value;
                    return Model::first($search, $options);
            }
        }
        return Model::fetch($search, $options);
    }
}

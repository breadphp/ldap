<?php

namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait InetOrgPerson
{
    use OrganizationalPerson;

    protected $audio;

    protected $businessCategory;

    protected $carLicense;

    protected $departmentNumber;

    protected $displayName;

    protected $employeeNumber;

    protected $employeeType;

    protected $givenName;

    protected $homePhone;

    protected $homePostalAddress;

    protected $initials;

    protected $jpegPhoto;

    protected $labeledURI;

    protected $mail;

    protected $manager;

    protected $mobile;

    protected $o;

    protected $pager;

    protected $photo;

    protected $preferredLanguage;

    protected $roomNumber;

    protected $secretary;

    protected $uid;

    protected $userCertificate;

    protected $userPKCS12;

    protected $userSMIMECertificate;

    protected $x500uniqueIdentifier;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\Person', array(
    'properties' => array(
        'audio' => array(
            'type' => 'string'
        ),
        'businessCategory' => array(
            'type' => 'string'
        ),
        'carLicense' => array(
            'type' => 'string'
        ),
        'departmentNumber' => array(
            'type' => 'string'
        ),
        'displayName' => array(
            'type' => 'string'
        ),
        'employeeNumber' => array(
            'type' => 'string'
        ),
        'employeeType' => array(
            'type' => 'string'
        ),
        'givenName' => array(
            'type' => 'string'
        ),
        'homePhone' => array(
            'type' => 'string'
        ),
        'homePostalAddress' => array(
            'type' => 'string'
        ),
        'initials' => array(
            'type' => 'string'
        ),
        'jpegPhoto' => array(
            'type' => 'binary'
        ),
        'labeledURI' => array(
            'type' => 'string'
        ),
        'mail' => array(
            'type' => 'string'
        ),
        'manager' => array(
            'type' => 'string'
        ),
        'mobile' => array(
            'type' => 'string'
        ),
        'o' => array(
            'type' => 'string'
        ),
        'pager' => array(
            'type' => 'string'
        ),
        'photo' => array(
            'type' => 'string'
        ),
        'preferredLanguage' => array(
            'type' => 'string'
        ),
        'roomNumber' => array(
            'type' => 'string'
        ),
        'secretary' => array(
            'type' => 'string'
        ),
        'uid' => array(
            'type' => 'string'
        ),
        'userCertificate' => array(
            'type' => 'binary',
            'multiple' => true
        ),
        'userPKCS12' => array(
            'type' => 'binary'
        ),
        'userSMIMECertificate' => array(
            'type' => 'binary'
        ),
        'x500uniqueIdentifier' => array(
            'type' => 'string'
        )
    )
));

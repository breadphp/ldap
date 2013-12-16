<?php
namespace Bread\LDAP\Traits;

use Bread\Configuration;

trait Group
{
    use Top, CommonName;

    protected $groupType;

    protected $adminCount;

    protected $controlAccessRights;

    protected $dLMemberRule;

    protected $desktopProfile;

    protected $groupAttributes;

    protected $groupMembershipSAM;

    protected $hideDLMembership;

    protected $location;

    protected $mail;

//     protected $managedBy;

    protected $member;

    protected $nTGroupMembers;

    protected $nonSecurityMember;

    protected $oOFReplyToOriginator;

    protected $operatorCount;

    protected $owner;

    protected $primaryGroupToken;

    protected $reportToOriginator;

    protected $reportToOwner;

    protected $thumbnailPhoto;
}

Configuration\Manager::defaults('Bread\LDAP\Traits\Group', array(
    'properties' => array(
        'groupType' => array(
            'type' => 'string',
            'required' => true
        ),
        'adminCount' => array(
            'type' => 'string'
        ),
        'controlAccessRights' => array(
            'type' => 'string',
            'multiple' => true
        ),
        'dLMemberRule' => array(
            'type' => 'string',
            'multiple' => true
        ),
        'desktopProfile' => array(
            'type' => 'string'
        ),
        'groupAttributes' => array(
            'type' => 'string'
        ),
        'groupMembershipSAM' => array(
            'type' => 'string'
        ),
        'hideDLMembership' => array(
            'type' => 'string'
        ),
        'location' => array(
            'type' => 'string'
        ),
        'mail' => array(
            'type' => 'string'
        ),
        'managedBy' => array(
            'type' => 'string'
        ),
//         'member' => array(
//             'type' => 'string',
//             'multiple' => true
//         ),
        'nTGroupMembers' => array(
            'type' => 'string',
            'multiple' => true
        ),
        'nonSecurityMember' => array(
            'type' => 'string'
        ),
        'oOFReplyToOriginator' => array(
            'type' => 'string'
        ),
        'operatorCount' => array(
            'type' => 'string'
        ),
        'owner' => array(
            'type' => 'string'
        ),
        'primaryGroupToken' => array(
            'type' => 'string'
        ),
        'reportToOriginator' => array(
            'type' => 'string'
        ),
        'reportToOwner' => array(
            'type' => 'string'
        ),
        'thumbnailPhoto' => array(
            'type' => 'string'
        )
    )
));

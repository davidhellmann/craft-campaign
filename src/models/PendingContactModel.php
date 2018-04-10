<?php
/**
 * @link      https://craftcampaign.com
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\campaign\models;

use putyourlightson\campaign\base\BaseModel;

/**
 * PendingContactModel
 *
 * @author    PutYourLightsOn
 * @package   Campaign
 * @since     1.0.0   
 */
class PendingContactModel extends BaseModel
{
    // Properties
    // =========================================================================

    /**
     * @var string Pending ID
     */
    public $pid;

    /**
     * @var string Email
     */
    public $email;

    /**
     * @var int Mailing list ID
     */
    public $mailingListId;

    /**
     * @var string Source URL
     */
    public $sourceUrl;

    /**
     * @var mixed Field data
     */
    public $fieldData;
}
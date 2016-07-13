<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\AuthorizationInfoType;

/**
 * An authorization identification number. Character length and
 * limits: 19 single-byte characters
 */
class UpdateAuthorizationResponseType
  extends AbstractResponseType
{
    /**
     * An authorization identification number. Character length and
     * limits: 19 single-byte characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionID;

    /**
     * @access    public
     * @namespace ebl
     * @var AuthorizationInfoType
     */
    public $AuthorizationInfo;
}

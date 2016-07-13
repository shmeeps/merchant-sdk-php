<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

class InitiateRecoupReq
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ns
     * @var InitiateRecoupRequestType
     */
    public $InitiateRecoupRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:InitiateRecoupReq>';
        if ($this->InitiateRecoupRequest != null) {
            $str .= '<ns:InitiateRecoupRequest>';
            $str .= $this->InitiateRecoupRequest->toXMLString();
            $str .= '</ns:InitiateRecoupRequest>';
        }
        $str .= '</ns:InitiateRecoupReq>';
        return $str;
    }
}

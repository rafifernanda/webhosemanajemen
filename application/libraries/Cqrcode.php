<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cqrcode
{
    function __construct()
    {
        require_once APPPATH.'/libraries/endroid/qr-code/src/QrCode.php';
    }
}
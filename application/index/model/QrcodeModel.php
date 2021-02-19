<?php

namespace app\index\model;

require 'Qrcode.php';

class QrcodeModel
{
    //图片宽度
    public $width;
    //图片高度
    public $height;
    //logo图片
    public $logo;
    //二维码图片
    public $image;

    /**
     * 获取当前图片
     */
    public function getImage()
    {

    }

    /**
     * 生成二维码
     */
    public function generateQrCode()
    {
        \QRcode::png('some othertext 1234', true);
    }


}
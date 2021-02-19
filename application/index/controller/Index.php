<?php
namespace app\index\controller;

use app\index\model\QrcodeModel;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $qrcode = new QrcodeModel();
        $qrcode->generateQrCode();
    }

    /**
     * 上传图片
     */
    public function upload()
    {

    }
}

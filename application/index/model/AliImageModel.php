<?php
namespace app\index\model;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

class AliImageModel
{
    public function verifyQrcode()
    {
        AlibabaCloud::accessKeyClient(config('alicloud.accessKeyId'), config('alicloud.accessSecret'))
            ->regionId('cn-shanghai')
            ->asDefaultClient();

        try {
            $result = AlibabaCloud::ocr()
                ->v20191230()
                ->recognizeQrCode()
                ->withTasks([])
                ->request();
            print_r($result->toArray());
        } catch (ClientException $e) {
            print_r($e->getErrorMessage());
        } catch (ServerException $e) {
            print_r($e->getErrorMessage());
        }
    }
}
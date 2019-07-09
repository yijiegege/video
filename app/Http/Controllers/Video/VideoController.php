<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OSS\OssClient;
use Illuminate\Support\Str;
class VideoController extends Controller
{
    protected $AccessKeyID='LTAINMUmZq8RJFvi';
    protected $AccessKeySecret='n4Z2kveEKq32wFcVtnw8oALC1z2EvV';
    protected  $bucket_name='hahaaa';
    public function Videoindex(){
        $Client= new OssClient($this->AccessKeyID,$this->AccessKeySecret,env('USERNAME'));
        $file_name1=rand(1,10).mt_rand(1,9999999).'.jpg';
        $file_name2='005H1nKLly8fygro2dok0j30e80e874m.jpg';
        $response=$Client->uploadFile($this->bucket_name,$file_name1,$file_name2);
        var_dump($response);
    }
}

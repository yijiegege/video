<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OSS\OssClient;
use Illuminate\Support\Str;
use App\Model\VideoModel;
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
    public function Videoindex1(){
        $Client= new OssClient($this->AccessKeyID,$this->AccessKeySecret,env('USERNAME'));
        $file_name1=rand(1,10).mt_rand(1,9999999).'.txt';
        $file_name2='robots.txt';
        $response=$Client->putObject($this->bucket_name,$file_name1,$file_name2);
        var_dump($response);
    }
    public function index(Request $request){
        $video_id=$request->input('video_id');
        $response=VideoModel::where(['video_id'=>$video_id])->get()->toArray();
        return view('video/index',compact('response'));
    }
}

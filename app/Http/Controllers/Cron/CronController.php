<?php

namespace App\Http\Controllers\Cron;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OSS\OssClient;
use Illuminate\Support\Str;
use OSS\Core\OssException;
class CronController extends Controller
{
    protected $AccessKeyID='LTAINMUmZq8RJFvi';
    protected $AccessKeySecret='n4Z2kveEKq32wFcVtnw8oALC1z2EvV';
    protected  $bucket_name='hahaaa';
    //转移视频文件到OSS
    public function CronSaveToOss(){
        //视频成功转移到oss之后，删除本地文件
        $Client= new OssClient($this->AccessKeyID,$this->AccessKeySecret,env('USERNAME'));
        //获取目录中的文件
        $file_path=storage_path('app/public/files');
        $file_list=scandir($file_path);
        foreach ($file_list as $k=>$v){
            if($v=='.' || $v=='..'){
                continue;
            }
            $file_name='files'.$v;
            $local_file=$file_path.'/'.$v;
        //echo '本地文件：'.$local_file;echo '</br>';die;
            //上传
            try{
                $Client->uploadFile($this->bucket_name,$file_name,$local_file);
            } catch(OssException $e) {
                printf(__FUNCTION__ . ": FAILED\n");
                printf($e->getMessage() . "\n");
                return;
            }
            //上传成功后 删除 本地文件
            echo $local_file.'上传成功';echo "<br>";echo "<hr>";
            unlink($local_file);
        }

    }
}

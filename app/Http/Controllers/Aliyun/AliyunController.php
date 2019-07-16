<?php

namespace App\Http\Controllers\Aliyun;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AliyunController extends Controller
{
    public function CallBack(){
       $json=file_get_contents("php://input");
       $logs_str=date('Y-m-d H:i:s').">>>>>".$json."\n";
       file_put_contents("logs/oss.log",$logs_str,FILE_APPEND);
    }
}

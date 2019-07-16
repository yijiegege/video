<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Video/Videoindex','Video\VideoController@Videoindex');
Route::get('Video/Videoindex1','Video\VideoController@Videoindex1');
Route::get('Video/CronSaveToOss','Cron\CronController@CronSaveToOss');
Route::get('Video/index','Video\VideoController@index');
Route::get('Video/Player','Video\PlayerController@Player');
Route::get('Video/LiveShow','Video\LiveShowController@LiveShow');


//阿里云消息服务
Route::get('Aliyun/CallBack','Aliyun\AliyunShowController@CallBack');
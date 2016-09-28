<?php

namespace App\Http\Controllers\Code;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function captcha ()
    {
        $builder = new CaptchaBuilder;
        $builder->build(120,40);
        //Session::set('phrase',$builder->getPhrase()); //存储验证码
        return response($builder->output())->header('Content-type','image/jpeg');
    }

}

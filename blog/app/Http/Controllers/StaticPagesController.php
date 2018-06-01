<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
  public function showPageOne(Request $request)
  {
    $arg1=0;
    $arg2=0;
    $arg3=0;
    $res='';
    if (($request->has('arg1')) and ($request->has('arg2')) and ($request->has('arg3')))
    {
        $arg1=intval($request->arg1);
        $arg2=intval($request->arg2);
        $arg3=intval($request->arg3);
        $res=$arg2*$arg2-4*$arg1*$arg3;
    }
    return view('page1', ['res' => $res]);
  }

  public function showPageTwo(Request $request)
  {
    $arg1=0;
    $res='';
    if ($request->has('arg1'))
    {
        $arg1=intval($request->arg1);
        $res=$arg1*$arg1*3.14;
    }
    return view('page2', ['res' => $res]);
  }

  public function showpageThree(Request $request)
  {
    $arg1=0;
    $res='';
    if ($request->has('arg1'))
    {
        $arg1=intval($request->arg1);
        $res=3.14*$arg1*2;
    }
    return view('page3', ['res' => $res]);
  }

}
?>

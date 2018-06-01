@extends('layouts.MathHelp')

@section('content')
<h1>Дискриминант</h1>

@if ($res != '')
    Result:<strong>{{$res}}</strong>!
@endif

<form>
    @csrf
    <input type="text" name="arg1" value="X"/><br>
    <input type="text" name="arg2" value="Y"/><br>
    <input type="text" name="arg3" value="Z"/><br>
    <input type="submit">
</form>
@endsection

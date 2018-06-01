@extends('layouts.MathHelp')

@section('content')
<h1>Длина круга</h1>

@if ($res != '')
    Result:<strong>{{$res}}</strong>!
@endif

<form>
    @csrf
    <input type="text" name="arg1" value="Radius" /><br>
    <input type="submit">
</form>
@endsection

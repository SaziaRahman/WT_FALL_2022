@extends('layouts.app')
@section('title')

    Profilepage

@endsection
@section('phpempty')

@endsection
@section('content')

<h2>
{{ session()->get('firstname') }}
</h2>
<br>
   
@endsection

@section('contentlogout')

<input type="submit" name="logout" value="logout">

@endsection
@extends('layouts.app')
@section('title')

    Registerpage

@endsection
@section('phpempty')

@endsection
@section('contentregister')
<table>
<tr><td>
<h2>
RegisterPage
</h2></td></tr>
<tr><td>
<h4>
	Firstname:
</h4></td><td>
<h4>
Password:
</h4>
</td></tr>
	<tr><td>
<h2>
	<input type="text" name="firstname" value="{{old('firstname')}}">
</h2></td><td>
<h2>
<input type="password" name="password" value="{{old('password')}}">
</h2>
</td></tr>

<tr><td>
<h4>
	@if ($errors->has('firstname'))
    <span class="">
        <strong>
            {{ $errors->first('firstname') }}
</strong>
</span>
    @endif
</h4></td><td>
<h4>
@if ($errors->has('password'))
    <span class="">
        <strong>
            {{ $errors->first('password') }}
</strong>
</span>
    @endif
</h4>
</td></tr>

<tr><td>
<h4>
	Lastname:
</h4></td><td>
<h4>
Confirm Password:
</h4>
</td></tr>
	<tr><td>
<h2>
	<input type="text" name="lastname" value="{{old('lastname')}}">
</h2></td><td>
<h2>
<input type="password" name="confirm_password" value="{{old('confirm_password')}}">
</h2>
</td></tr>

<tr><td>
<h4>
	@if ($errors->has('lastname'))
    <span class="">
        <strong>
            {{ $errors->first('lastname') }}
</strong>
</span>
    @endif
</h4></td><td>
<h4>
@if ($errors->has('confirm_password'))
    <span class="">
        <strong>
            {{ $errors->first('confirm_password') }}
</strong>
</span>
    @endif
</h4>
</td></tr>

<tr><td>
<h4>
	Email:
</h4></td><td>
<h4>
MobileNo:
</h4>
</td></tr>
	<tr><td>
<h2>
	<input type="text" name="email" value="{{old('email')}}">
</h2></td><td>
<h2>
<input type="text" name="mobileno" value="{{old('mobileno')}}">
</h2>
</td></tr>

<tr><td>
<h4>
	@if ($errors->has('email'))
    <span class="">
        <strong>
            {{ $errors->first('email') }}
</strong>
</span>
    @endif
</h4></td><td>
<h4>
@if ($errors->has('mobileno'))
    <span class="">
        <strong>
            {{ $errors->first('mobileno') }}
</strong>
</span>
    @endif
</h4>
</td></tr>

<tr><td>
<h4>
	Details:
</h4></td></tr>
	<tr><td>
<h2>
	<textarea name="details" placeholder="Enter Details">{{ old('details') }}</textarea>
</h2></td></tr>

<tr><td>
<h4>
	@if ($errors->has('details'))
    <span class="">
        <strong>
            {{ $errors->first('details') }}
</strong>
</span>
    @endif
</h4></td></tr>

<tr><td>
<h2>
<input type="submit" name="Insert" value="Insert">

<input type="submit" name="Update" value="Update">
</h2></td></tr>
<table>	
	
	

   
@endsection
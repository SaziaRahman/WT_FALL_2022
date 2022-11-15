@extends('layouts.app')
@section('title')

    doctors

@endsection
@section('phpempty')

@endsection
@section('contentDoctor')
<h2>
Show Doctors:
</h2><br>
<h4><table  border="1">
    <tr>
    <td>
        D_ID
    </td>
    <td>
        DName
    </td>
    <td>
        DPhone
    </td>
    <td>
        Degree
</td>

    </tr>
    @foreach($doctors as $doctor)
    <tr>
    <td>{{$doctor['D_ID']}}</td>
    <td>{{$doctor['DName']}}</td>
    <td>{{$doctor['DPhone']}}</td>
    <td>{{$doctor['Degree']}}</td>

    </tr>
    @endforeach
</table></h4>
@endsection
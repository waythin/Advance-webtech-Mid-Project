@extends('layouts.app')

@section('content')


    <h1>My Profile</h1>

    <table class="table table-borded">
        <tr>
            <td>Name :</td><td>{{$seeker->name}}</td>
        </tr>
        <tr>
            <td>Username :</td><td>{{$seeker->username}}</td>
        </tr>
        <tr>
            <td>Email :</td><td>{{$seeker->email}}</td>
        </tr>
        <tr>
            <td>Phone :</td><td>{{$seeker->phone}}</td>
        </tr>
        <tr>
            <td>Gender :</td><td>{{$seeker->gender}}</td>
        </tr>  
        <tr>
            <td>Date Of Birth :</td><td>{{$seeker->dob}}</td>
        </tr>
        <tr>
            <td>National ID :</td><td>{{$seeker->nid}}</td>
        </tr>
        <tr>
            <td>Password :</td><td>{{$seeker->password}}</td>
        </tr>
        <tr>
            <td>
            <a href="/seeker/profile/edit/{{$seeker->id}}/{{$seeker->username}}">Edit</a>  
            </td>
        </tr>
        
    </table>
@endsection 



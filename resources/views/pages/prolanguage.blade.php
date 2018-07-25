@extends('layout.app')
@section('content')

            <div class="content">
                <div class="title m-b-md">
                    programming Language
                </div>

                <div class="content">
                    <div class="title m-b-md">
                    @foreach($myname as $mynames) 
                    <ul></ul> <li>{{$mynames}} </li>
                    @endforeach
                    </div>
    
                @endsection


                
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Player Profile</div>

                <div class="card-body">
                       <a href="">Name - {{(Auth::user()->name)}}</a>
                   
                        <a href="">Email -  {{(Auth::user()->email)}}</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

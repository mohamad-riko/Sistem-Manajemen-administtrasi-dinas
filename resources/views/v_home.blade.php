@extends('layout.v_template')

@section('content')


<div class="callout callout-info">
            <h4>Dashboard</h4>
            
        </div>
        <p>Selamat Datang {{ Auth::user()->name }} </p>


             

    
@endsection
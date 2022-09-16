@extends('layouts.app')

@section('title','Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-black"> Selamat datang {{ Auth::user()->name }}</h5>
                   
                   <!-- <p>Leader</p> -->
                
                </div>
            </div>
        </div>
    </section>
@endsection
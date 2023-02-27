@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Program</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('program.show', 1) }}">Program 1</a></h5>
                        <p class="card-text">Deskripsi Program 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('program.show', 2) }}">Program 2</a></h5>
                        <p class="card-text">Deskripsi Program 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('program.show', 3) }}">Program 3</a></h5>
                        <p class="card-text">Deskripsi Program 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

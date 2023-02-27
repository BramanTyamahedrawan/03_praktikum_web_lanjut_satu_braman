@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        <form method="POST" action="{{ route('contact-us.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Produk</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['category'] }}</td>
                        <td>Rp {{ number_format($product['price'], 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Berita Terbaru</h1>
        <ul class="list-group">
            @foreach ($news as $item)
                <li class="list-group-item">
                    <a href="{{ route('news.show', $item['id']) }}">{{ $item['title'] }}</a>
                    <div class="d-flex justify-content-between align-items-center">
                        <small>{{ date('d M Y', strtotime($item['created_at'])) }}</small>
                        @if (isset($item['isi']))
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item['id'] }}" aria-expanded="false" aria-controls="collapse{{ $item['id'] }}">Lihat Isi</button>
                        @endif
                    </div>
                    @if (isset($item['isi']))
                        <div class="collapse mt-3" id="collapse{{ $item['id'] }}">
                            <div class="card card-body">
                                {{ $item['isi'] }}
                            </div>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection

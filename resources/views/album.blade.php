@extends('layout')
@section('content')
    <div class="container" style="max-width: 1000px; margin: auto; padding: 25px;">
        <h2 style="text-align:center; margin-right: 80%; font-family: 'bitcoin';">My Gallery</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 15px; justify-content: flex-start;">
            @foreach($photos as $photo)
                <div style="width: calc(25% - 15px); max-width: 200px; padding: 10px; background: white; border: 1px solid #ddd; border-radius: 8px; text-align: center; font-family: 'Times New Roman', serif; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    <p style="margin-bottom: 10px;"><strong>{{ $photo->created_at->format('d F Y') }}</strong></p>
                    <img src="{{ asset('storage/' . $photo->path) }}" width="100%" style="border-radius: 5px;">
                    <form action="{{ route('delete', $photo->id) }}" method="POST" style="margin-top: 10px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:rgb(255, 255, 255); color: black; margin-right: 100%; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
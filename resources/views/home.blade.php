@extends('layout')
@section('content')
    <div class="container" style="text-align: center; max-width: 600px; margin: auto; padding: 20px; background: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="font-family: 'Times New Roman', serif;">Upload Foto</h2>
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="photo" style="display: block; font-weight: bold; margin-bottom: 10px;">Pilih Foto:</label>
            <input type="file" name="photo" id="photo" required style="margin-bottom: 10px;">
            <button type="submit" style="background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Upload</button>
        </form>
    </div>
@endsection
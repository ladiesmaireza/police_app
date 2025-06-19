@extends('components.master')

@section('content')
<div class="container mt-4">
    <h2>Tambah Officer</h2>
    <form action="{{ route('officers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="badge_number">Badge Number</label>
            <input type="text" name="badge_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="rank">Pangkat</label>
            <input type="text" name="rank" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="assigned_area">Area Penugasan</label>
            <input type="text" name="assigned_area" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('officers.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

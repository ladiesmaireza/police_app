@extends('components.master')

@section('content')
<div class="container mt-4">
    <h2>Edit Officer</h2>
    <form action="{{ route('officers.update', $officer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $officer->name }}" required>
        </div>
        <div class="mb-3">
            <label for="badge_number">Badge Number</label>
            <input type="text" name="badge_number" class="form-control" value="{{ $officer->badge_number }}" required>
        </div>
        <div class="mb-3">
            <label for="rank">Pangkat</label>
            <input type="text" name="rank" class="form-control" value="{{ $officer->rank }}" required>
        </div>
        <div class="mb-3">
            <label for="assigned_area">Area Penugasan</label>
            <input type="text" name="assigned_area" class="form-control" value="{{ $officer->assigned_area }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('officers.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection


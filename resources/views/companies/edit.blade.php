@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Company</h1>

    <form action="{{ route('companies.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $company->name }}" required>
        </div>

        <!-- Add other form fields for company editing -->

        <button type="submit" class="btn btn-primary">Update Company</button>
    </form>
@endsection

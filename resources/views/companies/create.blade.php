@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Company</h1>

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Add other form fields for company creation -->

        <button type="submit" class="btn btn-primary">Create Company</button>
    </form>
@endsection

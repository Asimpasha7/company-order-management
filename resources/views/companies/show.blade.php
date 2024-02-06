@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Company Details</h1>

    <p><strong>Name:</strong> {{ $company->name }}</p>

    <!-- Display other company details -->

    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('companies.index') }}" class="btn btn-secondary">Back</a>
@endsection

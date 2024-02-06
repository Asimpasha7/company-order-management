@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Companies</h1>

    <a href="{{ route('companies.create') }}" class="btn btn-success mb-3">Create Company</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

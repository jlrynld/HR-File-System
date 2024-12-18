@extends('layouts.app')

@section('contents')
<div class="container-fluid" style="max-width: 1400px; padding-top: 200px; padding-bottom: 200px;">
    <div class="container mt-5">
        <h1 class="text-center mb-4">HR File Records</h1>

        <!-- Add Record Button -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('content.create') }}" class="btn btn-primary">Add New Record</a>
        </div>

        <!-- Bootstrap Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Without Middle Name</th>
                        <th>Extension Name</th>
                        <th>Date of Birth</th>
                        <th>Civil Status</th>
                        <th>Address</th>
                        <th>Contact Details</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($files as $file)
                    <tr>
                        <td>{{ $file->id }}</td>
                        <td>{{ $file->last_name }}</td>
                        <td>{{ $file->first_name }}</td>
                        <td>{{ $file->middle_name ?? 'N/A' }}</td>
                        <td>{{ $file->without_middle_name ? 'Yes' : 'No' }}</td>
                        <td>{{ $file->extension_name ?? 'N/A' }}</td>
                        <td>{{ $file->date_of_birth }}</td>
                        <td>{{ $file->civil_status }}</td>
                        <td>{{ $file->address }}</td>
                        <td>{{ $file->contact_details }}</td>
                        <td class="d-flex justify-content-center">
                            <!-- Edit Button -->
                            <a href="{{ route('content.edit', $file->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('content.delete', $file->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11" class="text-center">No records found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

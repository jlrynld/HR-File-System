@extends('layouts.app')

@section('contents')
<div class="container-fluid" style="max-width: 900px; padding-top: 200px; padding-bottom: 200px;">
    <div class="mt-4">
        <h1>Edit Record</h1>

        @include('components.form_errors')

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('content.update', $file->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{ $file->last_name }}" required onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>
            <div class="form-group mb-3">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="{{ $file->first_name }}" required onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>
            <div class="form-group mb-3">
                <label>Middle Name</label>
                <input type="text" name="middle_name" class="form-control" value="{{ $file->middle_name }}" onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>
            <div class="form-group mb-3">
                <label>Without Middle Name</label>
                <input type="checkbox" name="without_middle_name" value="1" {{ $file->without_middle_name ? 'checked' : '' }}>
            </div>
            <div class="form-group mb-3">
                <label>Extension Name</label>
                <input type="text" name="extension_name" class="form-control" value="{{ $file->extension_name }}" onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>
            <div class="form-group mb-3">
                <label>Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ $file->date_of_birth }}" required>
            </div>
            <div class="form-group mb-3">
                <label>Civil Status</label>
                <input type="text" name="civil_status" class="form-control" value="{{ $file->civil_status }}" required onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>
            <div class="form-group mb-3">
                <label>Address</label>
                <textarea name="address" class="form-control" rows="3" required>{{ $file->address }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label>Contact Details</label>
                <input type="text" name="contact_details" class="form-control" value="{{ $file->contact_details }}" required onkeypress="return onlyNumbers(event)">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('content.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('contents')
<div class="container-fluid" style="max-width: 900px; padding-top: 200px; padding-bottom: 200px;">
    <div class="mt-4">
        <h1>Add New Record</h1>

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

        <form action="{{ route('content.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" required value="{{ old('last_name') }}" onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>

            <div class="form-group mb-3">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" required value="{{ old('first_name') }}" onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>

            <div class="form-group mb-3">
                <label>Middle Name</label>
                <input type="text" name="middle_name" class="form-control" value="{{ old('middle_name') }}" onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>

            <div class="form-group mb-3">
                <label>Without Middle Name</label>
                <input type="checkbox" name="without_middle_name" value="1">
            </div>

            <div class="form-group mb-3">
                <label>Extension Name</label>
                <input type="text" name="extension_name" class="form-control" value="{{ old('extension_name') }}" onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>

            <div class="form-group mb-3">
                <label>Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Civil Status</label>
                <input type="text" name="civil_status" class="form-control" value="{{ old('civil_status') }}" required onkeypress="return onlyLettersAndSpaces(event)"onpaste="handlePaste(event)" onblur="removeExtraSpaces(this)">
            </div>

            <div class="form-group mb-3">
                <label>Address</label>
                <textarea name="address" class="form-control" rows="3" required value="{{ old('address') }}" ></textarea>
            </div>

            <div class="form-group mb-3">
                <label>Contact Details</label>
                <input type="text" name="contact_details" class="form-control" required value="{{ old('contact_details') }}" onkeypress="return onlyNumbers(event)">
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('content.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

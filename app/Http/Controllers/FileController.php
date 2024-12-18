<?php
namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('contents.index' , compact('files'));
    }

    public function create()
    {
        return view('contents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required|max:255|regex:/^[a-zA-Z\s]+$/',
            'first_name' => 'required|max:255|regex:/^[a-zA-Z\s]+$/',
            'middle_name' => 'nullable|string|max:255||regex:/^[a-zA-Z\s]+$/',
            'without_middle_name' => 'boolean',
            'extension_name' => 'nullable|string|max:255',
            'date_of_birth' => 'required|date',
            'civil_status' => 'required|string',
            'address' => 'required|string',
            'contact_details' => 'required|digits:11',
        ]);

        File::create($request->all());

        return redirect()->route('content.index')->with('success', 'Record added successfully.');
    }

    public function edit(File $file)
    {
        return view('contents.edit', compact('file'));
    }

    public function update(Request $request, File $file)
    {
        $request->validate([
            'last_name' => 'required|max:255|regex:/^[a-zA-Z\s]+$/',
            'first_name' => 'required|max:255|regex:/^[a-zA-Z\s]+$/',
            'middle_name' => 'nullable|string|max:255||regex:/^[a-zA-Z\s]+$/',
            'without_middle_name' => 'boolean',
            'extension_name' => 'nullable|string|max:255',
            'date_of_birth' => 'required|date',
            'civil_status' => 'required|string',
            'address' => 'required|string',
            'contact_details' => 'required|digits:11',
        ]);

        $file->update($request->all());

        return redirect()->route('content.index')->with('success', 'Record updated successfully.');
    }

    public function destroy(File $file)
    {
        $file->delete();

        return redirect()->route('content.index')->with('success', 'Record deleted successfully.');
    }
}

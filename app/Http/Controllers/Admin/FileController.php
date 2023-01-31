<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\ListFile;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    public function index()
    {
        $files = ListFile::query()->get();
        return view('admin.files.index', compact('files'));
    }

    public function create()
    {
        $file = new ListFile();
        return view('admin.files.create', compact('file'));
    }

    public function store(Request $request): RedirectResponse
    {
        $path = "file-templates";
        try {
            $file = new ListFile();
            $file->title = $request->title;
            $file->path = $request->path;
            if ($request->hasfile('template-image')) {
                $fileInput = $request->file('template-image');
                $extension = $fileInput->getClientOriginalExtension();
                $filename = uniqid('') . '.' . $extension;
                $fileInput->move($path . "/", $filename);
                $file->image = $path . "/" . $filename;
            }
            $file->save();
            return redirect()->route('files.index')->with('success_save', tr('Successfully saved'));
        } catch (Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function show($id)
    {
        $file = ListFile::query()->findOrFail($id);
        return view('admin.files.show', compact('file'));
    }

    public function edit($id)
    {
        $file = ListFile::query()->findOrFail($id);
        return view('admin.files.edit', compact('file'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $path = "file-templates";
        try {
            $file = ListFile::query()->findOrFail($id);
            if ($file->image) {
                File::delete($file->image);
                $file->title = $request->title;
                $file->path = $request->path;
                if ($request->hasfile('template-image')) {
                    $fileInput = $request->file('template-image');
                    $extension = $fileInput->getClientOriginalExtension();
                    $filename = uniqid('') . '.' . $extension;
                    $fileInput->move($path . "/", $filename);
                    $file->image = $path . "/" . $filename;
                }
                $file->save();
            }

            return redirect()->route('files.index')->with('success_save', tr('Successfully saved'));
        } catch (Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }

    }
}

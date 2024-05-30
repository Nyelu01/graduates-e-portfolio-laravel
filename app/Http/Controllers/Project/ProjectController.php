<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('Dashboards.candidate.index', compact('projects'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboards.candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = Project::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $fileName = 'image_' . time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('images', $fileName, 'public');
                Image::create([
                    'project_id' => $project->id,
                    'url' => $filePath,
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('Dashboards.candidate.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('Dashboards.candidate.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = Project::findOrFail($id);

        $project->update([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
        ]);


        // Check if there are any attachments to handle
        if ($request->hasFile('images')) {
            // Delete old attachments from storage and database
            $oldImages = Image::where('project_id', $project->id)->get();
            foreach ($oldImages as $oldImage) {
                // Delete the file from the storage
                Storage::disk('public')->delete($oldImage->url);

                // Delete the attachment record from the database
                $oldImage->delete();
            }

            // Save new attachments with custom filenames
            foreach ($request->file('images') as $file) {
                $fileName = 'image_' . time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('images', $fileName, 'public');
                Image::create([
                    'project_id' => $project->id,
                    'url' => $filePath,
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $images = Image::where('project_id', $project->id)->get();
        foreach ($images as $image) {
            Storage::disk('public')->delete($image->url);
            $image->delete();
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}




























// namespace App\Http\Controllers\Project;

// use App\Http\Controllers\Controller;
// use App\Models\Image;
// use App\Models\Project;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

// class ProjectController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $projects = Project::all();
//         return view('Dashboards.candidate.index', compact('projects'));
//     }



//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         return view('Dashboards.candidate.create');
//     }
//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'category' => 'required|string|max:255',
//             'description' => 'required|string',
//         ]);


//         $project = Project::create([
//             'title' => $request->title,
//             'category' => $request->category,
//             'description' => $request->description,
//         ]);
//         if ($request->hasFile('images')) {
//             foreach ($request->file('images') as $file) {
//                 $fileName = 'image_' . time() . '.' . $file->extension();
//                 $filePath = $file->storeAs('images', $fileName, 'public');
//                 Image::create([
//                     'project_id' => $project->id,
//                     'url' => $filePath,
//                 ]);
//             }
//         }


//         return redirect()->route('projects.index')->with('success', 'Project created successfully.');


//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show($id)
//     {
//         $project = Project::findOrFail($id);
//         return view('Dashboards.candidate.show', compact('project'));
//     }


//     /**
//      * Show the form for editing the specified resource.
//      */

//     public function edit(Project $project)
//     {
//         return view('Dashboards.candidate.edit', compact('project'));
//     }
//     /**
//      * Update the specified resource in storage.
//      */

//      public function update(Request $request, $id)
//      {
//          $request->validate([
//             'title' => 'required|string|max:255',
//             'category' => 'required|string|max:255',
//             'description' => 'required|string',
//          ]);

//          // Find the existing project by ID
//          $project = Project::findOrFail($id);

//          // Update the project's attributes
//          $project->update([
//             'title' => $request->title,
//             'category' => $request->category,
//             'description' => $request->description,
//          ]);

//          // Check if there are any attachments to handle
//          if ($request->hasFile('images')) {
//              // Delete old attachments from storage and database
//              $oldImages = Image::where('project_id', $project->id)->get();
//              foreach ($oldImages as $oldImage) {
//                  // Delete the file from the storage
//                  Storage::disk('public')->delete($oldImage->url);

//                  // Delete the attachment record from the database
//                  $oldImage->delete();
//              }

//              // Save new attachments with custom filenames
//              foreach ($request->file('images') as $file) {
//                  $fileName = 'image_' . time() . '.' . $file->extension();
//                  $filePath = $file->storeAs('images', $fileName, 'public');
//                  Image::create([
//                      'project_id' => $project->id,
//                      'url' => $filePath,
//                  ]);
//              }
//          }

//          return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
//      }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Project $project)
//     {
//         // Retrieve and delete the project's attachments
//         $images = Image::where('project_id', $project->id)->get();
//         foreach ($images as $image) {
//             // Delete the file from the storage
//             Storage::disk('public')->delete($image->url);

//             // Delete the attachment record from the database
//             $image->delete();
//         }

//         // Delete the project
//         $project->delete();

//         return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
//     }
// }

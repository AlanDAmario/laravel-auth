<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Str; //importazione sluge

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera tutti i progetti dal database
        $projects = Project::all();

        // Passa i progetti alla vista
        return view('admin.project.index', compact('projects')); //COMPACT CREA UN MODELLO DI ARRAY ASSOCIATIVO
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        // $slug =Str::of($data['title'])->slug('-');
        //VERSIONE SLUGGIZATA DEL TITOLO
        $data['slug'] = Str::of($data['title'])->slug('-');


        // Salva il progetto nel database
        $project = new Project();

        //è un metodo conveniente e sicuro per assegnare valori agli attributi di un modello in Laravel, rispettando le restrizioni definite dalla proprietà $fillable.
        $project->fill($data);

        $project->save();

        // Reindirizzamento alla pagina del progetto appena creato
        return redirect()->route('admin.projects.show', $project->slug)->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //  $project = Project::where('slug', $slug)->first();
        // // Passa il progetto specifico alla vista
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        // $slug = Str::of($data['title'])->slug('-');
        // VERSIONE SLUGGIZATA DEL TITOLO
        $data['slug'] = Str::of($data['title'])->slug('-');

        // Aggiorna i dati del progetto nel database
        $project->update($data);

        // Reindirizzamento alla pagina del progetto appena aggiornato
        return redirect()->route('admin.projects.show', $project->slug)->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}

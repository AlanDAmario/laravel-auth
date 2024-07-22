@extends('layouts.app')

@section('content')
    <div class="container py-5 px-5">
        <h1 class="text-center p-3 text-warning bg-black">Projects</h1>
        <table class="table table-hover table-bordered ">
            <thead>
                <tr>
                    <th scope="col" class="col-1">Status</th>
                    <th scope="col" class="col-5">Titolo</th>
                    <th scope="col" class="col-4">Slug</th>
                    <th scope="col" class="col-6">
                        <div class="d-flex">
                            
                                <span class="flex-grow-1 pt-2">Gestisci</span> 

                                <a href="{{ route('admin.projects.create') }}" as="button" class="btn btn-sm btn-outline-secondary  border-rounded" data-bs-toggle="tooltip" title="Nuovo Progetto"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>0</th>
                        <th>{{ $project->title }}</th>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <div class="d-flex gap-4 px-4">
                                <a href="" as="button" class="btn btn-outline-success border-0"
                                    data-bs-toggle="tooltip" title="Modifica"><i
                                        class="fa-solid fa-wand-magic-sparkles"></i></a>
                                <a href="{{ route('admin.projects.show', $project) }}" as="button"
                                    class="btn btn-outline-primary border-0" data-bs-toggle="tooltip" title="Descrizione"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="" as="button" class="btn btn-outline-danger border-0"
                                    data-bs-toggle="tooltip" title="Elimina"><i class="fa-solid fa-ban"></i></a>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

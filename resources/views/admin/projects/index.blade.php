@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2>Elenco progetti</h2>
                    <a href="{{ route('admin.projects.create') }}">
                        <div class="btn btn-sm btn-primary">Aggiungi progetto</div>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                                            <button class="btn btn-sm btn-primary me-1"><i class="fas fa-eye"></i></button>
                                        </a>
                                        <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">
                                            <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

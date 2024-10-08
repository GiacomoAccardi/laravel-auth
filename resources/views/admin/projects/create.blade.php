@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-12 mb-3">
                <h2>Aggiungi un nuovo progetto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="control-lable">Nome progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm"
                                placeholder="Nome progetto">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="control-lable">Sommario Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

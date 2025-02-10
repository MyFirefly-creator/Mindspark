@extends('component.app')

@section('title', 'Beranda')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-50" placeholder="Cari buku">
        </div>

        <div class="card">
            <img src="{{ url('img/books.jpg') }}" class="card-img-top rounded" alt="Books">
            <div class="card-body text-center">
                <a href="#" class="btn btn-dark">Let's go</a>
            </div>
        </div>

        <h3 class="mt-4">Jenis Buku</h3>
        <div class="d-flex gap-3">
            <button class="btn btn-primary">Non-fiksi</button>
            <button class="btn btn-dark">Fiksi</button>
            <button class="btn btn-primary">Pendidikan</button>
            <button class="btn btn-dark">Seni</button>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card p-3">
                    <p class="text-center">Buku 1</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <p class="text-center">Buku 2</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <p class="text-center">Buku 3</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <p class="text-center">Buku 4</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card">
                <img src="/img/card-2.jpg" class="card-img-top img-thumbnail" style="width: 100%;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">About Me</h5>
                    <p class="card-text">Nama : {{ $name }}</p>
                    <p class="card-text">Email : {{ $email }}</p>
                    <p class="card-text">No.HP : {{ $no_hp }}</p>
                    <a href="#" class="btn btn-primary">Ubah</a>
                </div>
                <div class="card-footer">
                    <q>Belajar web development</q>
                </div>
            </div>
        </div>
    </div>
@endsection

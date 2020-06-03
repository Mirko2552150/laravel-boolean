@extends('layouts.app')
@php
  $photos = [
    [
      'id' => 1,
      'title' => 'Foto uno',
      'path' => 'https://picsum.photos/200/300',
    ],
    [
      'id' => 2,
      'title' => 'Foto due',
      'path' => 'https://picsum.photos/200/300',
    ],
    [
      'id' => 3,
      'title' => 'Foto tre',
      'path' => 'https://picsum.photos/200/300',
    ]
    ];
@endphp
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pages</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-6">
            <h2>Pages</h2>
          </div>
          <div class="offset-3 col-3">
            <a href='{{route('admin.photos.create')}}'>Carica una foto</a>
          </div>
        </div>
        <table class="table table-dark">
          <thead class="thead-dark">
            <tr>
              <td>ID</td>
              <td>Title</td>
              <td colspan="3">Actions</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($photos as $key => $photo)
              <tr>
                <td>{{$photo['id']}}</td>
                <td>{{$photo['title']}}</td>
                <td><a class="btn btn-primary" href="#">Visualizza</a></td>
                <td><a class="btn btn-secondary" href="#">Modifica</a></td>
                <td>
                  <form class="" action="" method="post">
                    <input class="btn btn-danger" type="submit" name="" value="Elimina">
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.app')
@php
  $pages = [
    [
      'id' => 1,
      'category' => 1,
      'title' => 'Lorem ipsum 1',
      'tags' => [
        1,
        3,
        5
      ],
    ],
    [
      'id' => 2,
      'category' => 1,
      'title' => 'Lorem ipsum 2 ',
      'tags' => [
        2,
        7,
        5
      ],
    ],
    [
      'id' => 2,
      'category' => 1,
      'title' => 'Lorem ipsum 3',
      'tags' => [
        2,
        6,
        4
      ],
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
            <a href="{{route('admin.pages.create')}}">Crea una pagina</a>
          </div>
        </div>
        <table class="table table-dark">
          <thead class="thead-dark">
            <tr>
              <td>ID</td>
              <td>Title</td>
              <td>Category</td>
              <td>Tags</td>
              <td colspan="3">Actions</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($pages as $key => $page)
              <tr>
                <td>{{$page['id']}}</td>
                <td>{{$page['title']}}</td>
                <td>{{$page['category']}}</td>
                <td>
                  @foreach ($page['tags'] as $key => $tag)
                    {{$tag}}
                    {{-- se NON e' l'ultimo metto la , --}}
                    @if (!$loop->last)
                      ,
                    @endif
                  @endforeach
                </td>
                <td><a class="btn btn-primary" href="#">Visualizza</a></td>
                <td><a class="btn btn-secondary" href="#">Modifica</a></td>
                <td>
                  <form class="" action="index.html" method="post">
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

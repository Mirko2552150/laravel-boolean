@extends('layouts.app')
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
            <a href="#">Crea una pagina</a>
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
            <tr>
              <td>1</td>
              <td>Lorem ipsum</td>
              <td>Miscellania</td>
              <td>Tag 1, Tag 2, tag 3</td>
              <td><a class="btn btn-primary" href="#">Visualizza</a></td>
              <td><a class="btn btn-secondary" href="#">Modifica</a></td>
              <td>
                <form class="" action="index.html" method="post">
                  <input class="btn btn-danger" type="submit" name="" value="Elimina">
                </form>
              </td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@extends('layout.main')

@section('content')

<h4 class="form-title mb-4 text-decoration-underline" style="padding-left: 1%;">E-Book Detail</h4>

<table class="table table-borderless">
    <tbody>
            <tr>
                <td>Title:</a></td>
                <td>{{ $ebook->title }}</td>
            </tr>
            <tr>
                <td>Author:</a></td>
                <td>{{ $ebook->author }}</td>
            </tr>
            <tr>
                <td>Description</a></td>
                <td>{{ $ebook->description }}</td>
            </tr>
    </tbody>
  </table>

  <div class="row justify-content-end">
      <div class="col-md-2">
        <a class=" btn reg btn-rent" aria-current="page" href="/addCart/{{ $ebook->id }}">Rent</a>
      </div>
  </div>
@endsection

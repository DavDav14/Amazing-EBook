@extends('layout.main')

@section('title')
    <h1>Book List</h1>
@endsection

@section('content')
<table class="table table-borderless my-5 text-center">
    <thead>
      <tr>
        <th scope="col">Author</th>
        <th scope="col">Title</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ebooks as $ebook )
            <tr>
                <td class="col-4 border">{{ $ebook->author }}</a></td>
                <td class="border"><a href="/e_book/{{$ebook->id}}">{{ $ebook->title }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection

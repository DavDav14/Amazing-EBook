@extends('layout.main')

@section('content')

@if ($orders->isNotEmpty())
<table class="table table-borderless my-5 " >
    <thead>
        <tr>
          <th class="text-center" scope="col">Title</th>
        </tr>
      </thead>
    <tbody>
        @foreach ($orders as $order )
            <tr>
                <div class="row">
                    <div>
                        <td class="border col-10 text-center">{{ $order->ebook->title }}</a></td>
                    </div>
                </div>
                    <div class="row">
                        <div class="co-2">
                            <td class="justify-content-start">
                                <form action="/order/{{ $order->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class=" btn btn-link" onclick="return confirm('Are you sure want delete this book?')">Delete</button>
                                </form>
                            </td>
                        </div>
                    </div>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="row justify-content-end">
    <div class="col-md-2">
      <a class=" btn reg btn-rent" aria-current="page" href="/cart/success">Submit</a>
    </div>
</div>
@else
<div class="container justify-content-center text-center">
    <div class="row">
        <div class="col">
            <h2>No Data....</h2>
        </div>
    </div>
</div>
@endif




@endsection

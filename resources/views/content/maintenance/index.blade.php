@extends('layout.main')

@section('content')
<table class="table table-bordered my-5 justify-content-center text-center">
    <thead class="table table-bordered">
        <tr>
          <th scope="col-8">Account</th>
          <th scope="col-4">Action</th>
        </tr>
      </thead>
    <tbody>
        @foreach ($users as $user )
            <tr>
                <div class="row">
                    <div >
                        <td class="col-7">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} - {{ $user->role->role_desc }} </a></td>
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <td>
                                <a href="/admin/maintenance/{{ $user->id }}/edit">Update Role
                                <form action="/admin/maintenance/{{ $user->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="del-role btn btn-link" onclick="return confirm('Are you sure want delete this Account?')">Delete</button>
                                </form>
                            </td>
                        </div>
                    </div>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

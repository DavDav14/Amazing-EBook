@extends('layout.main')

@section('content')

<h2 class="form-title mb-4">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</h2>

<div class="container">
    <form action="/admin/maintenance/{{ $user->id }}" method="post">
        @method('put')
        @csrf
        <div class="row g-3">
            <div class="col">
                <div class="form-group mb-3">
                    <label for="role_id">Role</label>
                    <select class="form-select form-select-sm @error('role_id') is-invalid @enderror" name="role_id" id="role_id">
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}"  @if($user->role->id == $user->role->id) selected @endif>{{$role->role_desc}}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="w-50 btn reg btn-lg btn-primary mt-5" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

@extends('layout.main')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-3" style="max-height: 550px; overflow:hidden;">
            <img src="{{ asset('storage/'.  auth()->user()->display_picture) }}" class="img-thumbnail img-fluid" alt="{{ auth()->user()->first_name }}">
        </div>
        <div class="col-md-9">
            <form action="/profile/{{ auth()->user()->first_name }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="container">
                        <div class="row g-3">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" required value="{{ old('first_name',auth()->user()->first_name) }}">
                                    @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" required value="{{ old('last_name',auth()->user()->last_name) }}">
                                    @error('last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="gender_id">Gender</label>
                                    <div class="form-check form-check-inline" id="genderRadio">
                                        <input class="form-check-input @error('gender_id') is-invalid @enderror" type="radio" name="gender_id" id="male" value="1" @if(Auth::user()->gender_id=='1') checked @endif>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender_id') is-invalid @enderror" type="radio" name="gender_id" id="female" value="2" @if(Auth::user()->gender_id=='2') checked @endif>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    @error('gender_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" value="{{ old('middle_name',auth()->user()->middle_name) }}">
                                    @error('middle_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email',auth()->user()->email) }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="role_id">Role</label>
                                    <select class="form-select form-select-sm @error('role_id') is-invalid @enderror" name="role_id" id="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}" @if($role->id == $role->id) selected @endif>{{$role->role_desc}}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="display_picture" class="form-label">Display Picture:</label>
                                    <input type="hidden" name="oldImage" value="{{ auth()->user()->display_picture }}">
                                    <input class="form-control @error('display_picture') is-invalid @enderror" type="file" id="display_picture" name="display_picture" required>
                                    @error('display_picture')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="container justify-content-center text-center">
                        <div class="row">
                            <div class="col-12">
                                <button class="w-80 btn btn-lg reg mt-5" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>


@endsection

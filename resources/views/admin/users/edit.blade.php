@extends('admin.layout.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('main.edit_user') }}</h1> <!-- Translated Edit User title -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ __('main.home') }}</a></li> <!-- Translated Home -->
                        <li class="breadcrumb-item active">{{ __('main.users') }}</li> <!-- Translated Active Item -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">{{ __('main.users') }}</h3> <!-- Translated Users title -->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('admin.users.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
                @csrf <!-- Laravel CSRF token helper -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="first_name">{{ __('main.first_name') }}</label> <!-- Translated First Name -->
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="{{ __('main.enter_first_name') }}" value="{{ $user->first_name }}">
                            @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name">{{ __('main.last_name') }}</label> <!-- Translated Last Name -->
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="{{ __('main.enter_last_name') }}" value="{{ $user->last_name }}">
                            @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('main.email') }}</label> <!-- Translated Email -->
                            <input type="text" name="email" class="form-control" id="email" placeholder="{{ __('main.enter_email') }}" value="{{ $user->email }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('main.phone') }}</label> <!-- Translated Phone -->
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="{{ __('main.enter_phone') }}" value="{{ $user->phone }}">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="avatar">{{ __('main.avatar') }}</label> <!-- Translated Avatar -->
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="avatar" type="file" class="custom-file-input" id="avatar">
                                    <label class="custom-file-label" for="avatar">{{ __('main.choose_image') }}</label> <!-- Translated Choose Image -->
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">{{ __('main.upload') }}</span> <!-- Translated Upload -->
                                </div>
                            </div>

                            <img src="{{ asset('uploads/images/users/' . $user->avatar) }}" width="150px" height="150px" alt="{{ __('main.user_avatar') }}"> <!-- Added alt text -->

                            @error('avatar')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info"> <i class="nav-icon fas fa-paper-plane"></i> {{ __('main.update') }}</button> <!-- Translated Update -->
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

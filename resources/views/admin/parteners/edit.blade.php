@extends('admin.layout.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('main.edit_partener') }}</h1> <!-- Translated title -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ __('main.home') }}</a></li> <!-- Translated home -->
                        <li class="breadcrumb-item active">{{ __('main.parteners') }}</li> <!-- Translated active item -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">{{ __('main.parteners') }}</h3> <!-- Translated card title -->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('admin.parteners.update', ['id' => $partener->id]) }}" enctype="multipart/form-data">
                @csrf <!-- CSRF token -->
                    <div class="card-body">


                        <div class="border p-3">
                            @foreach($langs as $lang)
                                <div class="form-group">
                                    <label for="name">{{ __('main.name') }} ({{ $lang->name }}) </label>
                                    <input type="text" name="name[{{$lang->code}}]" class="form-control" id="name" placeholder="{{ __('main.enter_name') }}" value="{{ isset($partener->translate($lang->code)->name) ? $partener->translate($lang->code)->name : '' }}">
                                    @error('name.' . $lang->code)
                                    <div class="text-danger">{{ $errors->first('name.' . $lang->code) }}</div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                        <br>


@php
    $selectedCats = is_array($partener->categories)
        ? $partener->categories
        : json_decode($partener->categories, true) ?? [];
@endphp

<div class="border p-3">
    <div class="form-group">
        <label for="name">{{ __('main.partners') }}</label>
        <select name="cats[]" class="form-control" multiple>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}"
                    {{ in_array($cat->id, $selectedCats) ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>




                        <div class="border p-3">
                            @foreach($langs as $lang)
                        <div class="form-group">
                            <label for="address">{{ __('main.address') }} ({{ $lang->name}})</label> <!-- Translated label -->
                            <input name="address[{{$lang->code}}]" type="text" class="form-control" id="address" placeholder="{{ __('main.enter_address') }}" value="{{ isset($partener->translate($lang->code)->address) ? $partener->translate($lang->code)->address : '' }}">
                            @error('address.' . $lang->code)
                            <div class="text-danger">{{ $errors->first('address.' . $lang->code) }}</div>
                            @enderror
                        </div>
                            @endforeach
                        </div>
                        <br>






                        <div class="form-group">
                            <label for="image">{{ __('main.icon') }}</label> <!-- Translated label -->
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="icon" type="file" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">{{ __('main.choose_icon') }}</label> <!-- Translated label -->
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">{{ __('main.upload') }}</span> <!-- Translated upload button -->
                                </div>
                            </div>
                            <img src="{{ asset('uploads/images/parteners/' . $partener->icon) }}" width="70px" height="70px" alt="{{ __('main.current_icon') }}"> <!-- Added alt text -->

                            @error('icon')
                            <div class="text-danger">{{ $errors->first('icon') }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info"> <i class="nav-icon fas fa-paper-plane"></i> {{ __('main.update') }}</button> <!-- Translated submit button -->
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

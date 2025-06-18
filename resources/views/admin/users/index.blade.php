@extends('admin.layout.master')

@section('styles')
    <style>
        svg {
            font-size: 5px;
            width: 28px;
        }
        .text-sm {
            margin-top: 26px;
            font-size: .875rem !important;
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('main.users') }}</h1> <!-- Translated Users title -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ __('main.home') }}</a></li> <!-- Translated home -->
                        <li class="breadcrumb-item active">{{ __('main.users') }}</li> <!-- Translated active item -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-6">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('admin.users.index') }}" class="input-group">
                        <input type="text" name="search" value="{{ $searchTerm }}" class="form-control" placeholder="{{ __('main.search_by_name') }}" aria-label="{{ __('main.search_by_name') }}">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit">
                                <i class="fas fa-search"></i> {{ __('main.search') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">{{ __('main.all_users') }}</h3> <!-- Translated title -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('main.avatar') }}</th> <!-- Translated Avatar -->
                            <th>{{ __('main.name') }}</th> <!-- Translated Name -->
                            <th>{{ __('main.email') }}</th> <!-- Translated Email -->
                            <th>{{ __('main.phone') }}</th> <!-- Translated Phone -->
                            <th>{{ __('main.action') }}</th> <!-- Translated Action -->
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($accounts as $index => $account)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img src="{{ asset('uploads/images/users/' . $account->avatar) }}" width="150px" height="150px" alt="{{ __('main.user_avatar') }}"> <!-- Added alt text -->
                                </td>
                                <td>{{ $account->first_name }} {{ $account->last_name }}</td>
                                <td>{{ $account->email }}</td>
                                <td>{{ $account->phone }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', ['id' => $account->id]) }}">
                                        <button class="btn btn-sm btn-info"> <i class="nav-icon fas fa-edit"></i> {{ __('main.edit') }}</button> <!-- Translated Edit -->
                                    </a>

                                    @if($account->deleted_at == null)
                                        <a href="{{ route('admin.users.soft_delete', ['id' => $account->id]) }}">
                                            <button class="btn btn-sm btn-info"><i class="nav-icon fas fa-trash"></i> {{ __('main.soft_delete') }}</button> <!-- Translated Soft Delete -->
                                        </a>
                                    @else
                                        <a href="{{ route('admin.users.restore', ['id' => $account->id]) }}">
                                            <button class="btn btn-sm btn-info"><i class="nav-icon fas fa-trash-restore"></i> {{ __('main.restore') }}</button> <!-- Translated Restore -->
                                        </a>
                                    @endif

                                    <a href="{{ route('admin.users.destroy', ['id' => $account->id]) }}">
                                        <button class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i> {{ __('main.remove') }}</button> <!-- Translated Remove -->
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">{{ __('main.no_data') }}</td> <!-- Translated No Data -->
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center" style="margin-top: 50px;">
                        {{ $accounts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Редактирование пользователя</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form class="w-25" method="post" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <div class="mb-3">
                            <input type="text" name="surname" value="{{ $user->surname }}" class="form-control mb-2" placeholder="Фамилия">
                            @error('surname')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-2" placeholder="Имя">
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="patronymic" value="{{ $user->patronymic }}" class="form-control mb-2" placeholder="Отчество">
                            @error('patronymic')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="number" name="age" value="{{ $user->age }}" class="form-control mb-2" placeholder="Возраст">
                            @error('age')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="address" value="{{ $user->address }}" class="form-control mb-2" placeholder="Адрес">
                            @error('address')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <select type="text" name="gender" class="form-control mb-2">
                                <option {{ $user->gender==0 ? ' selected' : '' }} value="0">Ж</option>
                                <option {{ $user->gender==1 ? ' selected' : '' }} value="1">М</option>
                            </select>
                            @error('gender')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="password" name="password" class="form-control mb-2" placeholder="Пароль">
                            @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Повторите пароль">
                            @error('password_confirmation')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Добавить пользователя</li>
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
                <form class="w-25" method="post" action="{{ route('user.store') }}">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control mb-2" placeholder="Email">
                        @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" name="surname" value="{{ old('surname') }}" class="form-control mb-2" placeholder="Фамилия">
                        @error('surname')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control mb-2" placeholder="Имя">
                        @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="form-control mb-2" placeholder="Отчество">
                        @error('patronymic')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="number" name="age" value="{{ old('age') }}" class="form-control mb-2" placeholder="Возраст">
                        @error('age')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" name="address" value="{{ old('address') }}" class="form-control mb-2" placeholder="Адрес">
                        @error('address')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <select type="text" name="gender" class="form-control mb-2">
                            <option {{ old('gender')==0 ? ' selected' : '' }} value="0">Ж</option>
                            <option {{ old('gender')==1 ? ' selected' : '' }} value="1">М</option>
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
                    <input type="submit" class="btn btn-primary" value="Создать">
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить цвет</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Добавить цвет</li>
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
                <form class="w-25" method="post" action="{{ route('color.store') }}">
                    @csrf
                    @method('post')
                    <div class="mb-2 d-flex">
                        <label for="text" class="mr-1" style="font-size: 25px; color: #9d9d9d">#</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Наименование">
                    </div>
                    <input type="submit" class="btn btn-primary ml-3" value="Создать">
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

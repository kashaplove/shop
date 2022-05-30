@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование товара</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Редактирование товара</li>
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
                <form class="w-25" method="post" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <div class="mb-3">
                            <input type="text" name="title" value="{{ $product->title }}" class="form-control mb-2" placeholder="Фамилия">
                            @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="description" value="{{ $product->description }}" class="form-control mb-2" placeholder="Имя">
                            @error('description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="content" value="{{ $product->content }}" class="form-control mb-2" placeholder="Отчество">
                            @error('content')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror


                            <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control mb-2" placeholder="Возраст">
                            @error('quantity')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="number" name="number" value="{{ $product->number }}" class="form-control mb-2" placeholder="Адрес">
                            @error('number')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <select class="form-control mb-3" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_published" checked="">
                                <label class="form-check-label">Опубликовать</label>
                            </div>
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

@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Товар "{{ $product->title }}"</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('product.index') }}">Товары </a>/ {{ $product->title }}</li>
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
                <div class="col-6">
                    <div class="card p-3">
                        <div class="d-flex mb-3">
                            <div class="mr-3">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('product.delete', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                            </form>
                        </div>

                        <div class="d-flex">
                            <div class="img mr-3">
                                <img src="{{ asset('/storage/' . $product->preview_image) }}" width="200" alt="">
                            </div>
                            <div class="">
                                <div class="font-weight-bold mb-3">
                                    {{ $product->title }}
                                </div>
                                <div class="desc mb-3">
                                    {{ $product->description }}
                                </div>
                                <div class="quantity">
                                    Количество на складе: {{ $product->quantity }}
                                </div>
                                <div class="price">
                                    Цена: {{ $product->price }}
                                </div>
                                <div class="category">
                                    Категория: {{ $product->category->title }}
                                </div>
                                <div class="text-secondary mt-3">
                                    {{ $product->content }}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

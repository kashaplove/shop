@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование товара "{{ $product->title }}"</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('product.index') }}">Товары </a>/ Редактирование товара</li>
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
                <form class="w-50 ml-2" method="post" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('patch')
                    <div class="mb-2 d-flex">
                        <div class="d-inline mr-3 mt-1">
                            <div class="mb-4 text-secondary">Название</div>
                            <div class="mb-4 text-secondary">Описание</div>
                            <div class="mb-5 text-secondary">Текст</div>
                            <div class="mb-3 text-secondary">Количество</div>
                            <div class="mb-4 text-secondary">Цена</div>
                            <div class="mb-4 text-secondary">Категория</div>
                        </div>
                        <div class="w-50">
                            <input type="text" name="title" value="{{ $product->title }}" class="form-control mb-2"
                                   placeholder="Название">
                            @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="description" value="{{ $product->description }}"
                                   class="form-control mb-2" placeholder="Описание">
                            @error('description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <textarea name="content" class="form-control mb-2"
                                      placeholder="Текст">{{ $product->content }}</textarea>
                            @error('content')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <input type="number" name="quantity" value="{{ $product->quantity }}"
                                   class="form-control mb-2" placeholder="Возраст">
                            @error('quantity')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror


                            <input type="number" name="price" value="{{ $product->price }}"
                                   class="form-control mb-2" placeholder="Возраст">
                            @error('quantity')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <select class="form-control mb-3" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="is_published" checked="{{ $product->is_published }}">
                        @error('is_published')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <label class="form-check-label">Опубликовать</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

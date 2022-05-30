@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить товар</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Добавить товар</li>
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
                <form class="w-50" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control mb-2" placeholder="Название">
                        @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" name="description" value="{{ old('description') }}" class="form-control mb-2" placeholder="Описание">
                        @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <textarea type="text" name="content" class="form-control mb-2" placeholder="Текст">{{ old('content') }}</textarea>
                        @error('content')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control mb-2" placeholder="Количество">
                        @error('quantity')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="number" name="price" value="{{ old('price') }}" class="form-control mb-2" placeholder="Цена">
                        @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror


                        <select class="form-control mb-3" name="category_id" data-placeholder="Выберите категорию">
                            <option selected="selected" disabled value="0">Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Выберите тэг" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>

{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" name="is_published" checked="">--}}
{{--                            <label class="form-check-label">Опубликовать</label>--}}
{{--                        </div>--}}
                    </div>
                    <input type="submit" class="btn btn-primary" value="Создать">
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

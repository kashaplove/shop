@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Товары</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Товары</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Создать</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Картинка</th>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th>Кол-во</th>
                                    <th>Цена</th>
                                    <th>Опубликовано</th>
                                    <th>Категория</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr style="height: 200px;">
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('/storage/' . $product->preview_image) }}" alt="" width="180"></td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->is_published==1 ? 'Да' : 'Нет' }}</td>
                                        <td>{{ $product->category_id }}</td>
                                        </a>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <script type="text/javascript">
        function DoNav(url) {
            document.location.href = url;
        }
    </script>
    <!-- /.content -->
@endsection

@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукт</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Продукты</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <div class="pr-3">
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">
                                        Редактировать
                                    </a>
                                </div>
                                <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{$product->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Наименование</th>
                                            <td>{{$product->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Описание</th>
                                            <td>{{$product->description}}</td>
                                        </tr>
                                        <tr>
                                            <th>Контент</th>
                                            <td>{{$product->content}}</td>
                                        </tr>
                                        <tr>
                                            <th>Цена</th>
                                            <td>{{$product->price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Количество</th>
                                            <td>{{$product->count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Публикация</th>
                                            <td>{{$product->publishedTitle}}</td>
                                        </tr>
                                     </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

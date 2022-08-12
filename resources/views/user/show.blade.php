@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Пользователь</li>
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
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                        Редактировать
                                    </a>
                                </div>
                                <form action="{{route('user.delete', $user->id)}}" method="POST">
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
                                            <td>{{$user->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Имя</th>
                                            <td>{{$user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Фамилия</th>
                                            <td>{{$user->surname}}</td>
                                        </tr>
                                        <tr>
                                            <th>Отчество</th>
                                            <td>{{$user->patronymic}}</td>
                                        </tr>
                                        <tr>
                                            <th>Возраст</th>
                                            <td>{{$user->age}}</td>
                                        </tr>
                                        <tr>
                                            <th>Пол</th>
                                            <td>{{$user->genderTitle}}</td>
                                        </tr>
                                        <tr>
                                            <th>Адрес</th>
                                            <td>{{$user->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$user->email}}</td>
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

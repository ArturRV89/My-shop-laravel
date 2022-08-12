@extends('layout.main')

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
                        <li class="breadcrumb-item active">Пользователи</li>
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
                <form action="{{route('user.store')}}" class="col-sm-10" method="POST">
                    @csrf
                    @method('post')

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" value="{{old('surname')}}" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" class="form-control" value="{{old('patronymic')}}" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age" class="form-control" value="{{old('age')}}" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Повторите пароль">
                    </div>
                    <div class="form-group">
                        <select class="custom-select form-control" name="gender" >
                            <option selected disabled >Выберите пол</option>
                            <option {{old('gender') == 1 ? 'selected' : ''}} value="1">Мужской</option>
                            <option {{old('gender') == 2 ? 'selected' : ''}}value="2">Женский</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="address" class="form-control" value="{{old('address')}}" placeholder="Адресс">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
                    </div>

                    <button type="submit" class="btn btn-success">Добавить</button>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

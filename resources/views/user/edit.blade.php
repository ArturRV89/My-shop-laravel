@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать</h1>
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
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <input type="text" name="name" value="{{$user->name ?? old('name')}}" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" value="{{$user->surname ?? old('surname')}}" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" value="{{$user->patronymic ?? old('patronymic')}}" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <select class="custom-select form-control" name="gender" >
                            <option disabled selected>Выберите пол</option>
                            <option {{$user->gender == 1 || old('gender') == 1 ? 'selected' : ''}} value="1">Мужской</option>
                            <option {{$user->gender == 2 || old('gender') == 2 ? 'selected' : ''}}value="2">Женский</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="age" value="{{$user->age ?? old('age')}}" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="{{$user->address ?? old('address')}}" placeholder="Адресс">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="{{$user->email ?? old('email')}}" placeholder="Email">
                    </div>

                    <button type="submit" class="btn btn-success">Редактировать</button>

                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

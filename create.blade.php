@extends('admin.layout')
@section('content')
    <h1>Создать магазин</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => 'shops.store']) !!}
    <div class="form-group">
    {{ Form::label('img', 'Логотип') }}
    {{ Form::text('img',null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Название') }}
        {{ Form::text('name', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        <div class="form-group">
        {{ Form::label('city', 'Город') }}
        {{ Form::textarea('city', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Адрес') }}
        {{ Form::text('address', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'email') }}
        {{ Form::text('email',null, ['class' =>'form-control']) }}
    </div>
        <div class="form-group">
            {{ Form::label('telephone', 'номер телефона') }}
            {{ Form::text('telephone',null, ['class' =>'form-control']) }}
        </div>
        <div class="form-group">
        {{ Form::label('URL', 'Официальный сайт') }}
        {{ Form::text('URL', null, ['class' =>'form-control']) }}
    </div>
    {{ Form::submit('Создать магазин', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
   {{-- <div class="row">                                           //работает
    <form action="{{route('shops.store')}}" method="post">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Логотип</label>
                <input type="text" name="img">
            </div>
        </div>
        {{csrf_field()}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <label>Название</label>
                <input type="text" name="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Город</label>
                <input type="text" name="city">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Адрес</label>
                <input type="text" name="address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>email</label>
                <input type="email" name="email">
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Номер телефона</label>
            <input type="text" name="telephone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Официальный сайт</label>
            <input type="text" name="URL">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Создать</button>
    </div>

</form>
    </div>--}}
{{--
@endsection--}}

<!-- Проверяем есть ли в в сессии ключ-->
@if(Session::has('success'))
    <div class="alert alert-success">
        <!-- Если да, получаем значение это ключа-->
        {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('updated'))
    <div class="alert alert-danger">
        {{ Session::get('updated') }}
    </div>
@endif
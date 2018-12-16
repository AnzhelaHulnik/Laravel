@extends('layouts.app')

@section('content')
    <h3>Обратная связь</h3>
    <h4>Заполните форму для передачи Вашего сообщения</h4>

    <div class="container">
        <div class="row">
               <div class="col-md-12">
                   {!! Form::open() !!}
                  <div class="form-group">
                    {{ Form::label('title', 'Название') }}
                    {{ Form::text('title', null, ['class' =>'form-control', 'id' => 'title']) }}
                   </div>
                   <div class="form-group">
                    {{ Form::label('content', 'Текст') }}
                    {{ Form::textarea('content',null, ['class' =>'form-control', 'id' => 'content']) }}
                   </div>

                    {{ Form::button('Отправить', ['class' => 'btn btn-primary','id' => 'button']) }}


                    {!! Form::close() !!}
                   <div id="msg"></div>
               </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[title="csrf-token"]').attr('content')
                }
            });
            $('#button').click(function () {
                var title = $('#title').val();
                var content = $('#content').val();

                $.ajax({
                    type: "POST",
                    url: 'sendmail',
                    data: {
                        title: title,
                        content: content

                    },
                    success: function(data){
                        $('#msg').text(data.msg);
                    }
                })
            });
        });
    </script>
@endsection
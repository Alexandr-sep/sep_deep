@extends('layouts.app')

@section('content')
    <!-- Форма создания задачи... -->
    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой задачи -->
        <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">{{ trans('create.task') }}</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> {{ trans('create.add_task') }}
                    </button>

                    <a href="{{ route('tasks.index') }}" class="btn btn-danger"><i class="fa fa-ban"></i> {{ trans('create.cancel') }}</a>
                </div>
            </div>
        </form>
    </div>
@endsection
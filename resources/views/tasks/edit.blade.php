@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма редактирования задачи -->
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="form-horizontal">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">{{ trans('create.task') }}</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{ $task->name }}">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-floppy-o"></i> {{ trans('edit.save') }}
                    </button>

                    <a href="{{ route('tasks.index') }}" class="btn btn-danger"><i class="fa fa-ban"></i> {{ trans('create.cancel') }}</a>
                </div>
            </div>
        </form>
    </div>
@endsection
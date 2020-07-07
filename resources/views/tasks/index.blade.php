@extends('layouts.app')

@section('content')
    <!-- Форма создания задачи... -->
    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
    <!-- Текущие задачи -->
    <a href="{{ route('tasks.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Новая задача</a>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Текущие задачи
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Заголовок таблицы -->
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Действие</th>
                    </tr>
                    </thead>

                    <!-- Тело таблицы -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Имя задачи -->
                            <td class="table-text col-sm-8">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td class="col-sm-1">
                                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td class="col-sm-1">
                                <form action="{{route('tasks.edit', $task->id)}}" method="POST">
                                    {{ method_field('GET') }}}
                                    {{ csrf_field() }}
                                    <button class="btn btn-warning">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-7 mx-auto">
        <h2 class="text-center mb-4">タスク一覧</h2>
     
        @if (count($tasks) > 0)
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="col-sm-1 text-center">id</th>
                        <th class="text-center">ステータス</th>
                        <th class="text-center">タスク</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td class="text-center">{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                        <td class="col-sm-3 text-center">{{ $task->status}}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        {!! link_to_route('tasks.create', '新規タスクを追加', [], ['class' => 'btn btn-primary offset-sm-8 col-sm-4']) !!}
    </div>
</div>
 @endsection
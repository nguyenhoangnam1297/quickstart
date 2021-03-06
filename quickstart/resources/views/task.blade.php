@extends('app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('messages.newtask') }}
                </div>
                @if($errors->has('name'))
                    <div class="alert alert-danger"><strong>{{$errors->first('name')}}</strong></div>
                @endif 
                <div class="panel-body">
                    <form action="{{route('postTask')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">{{ trans('messages.task') }}</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>{{ trans('messages.add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Current Tasks -->
            @if($count>0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('messages.current') }}
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <tr>
                                    <th>{{ trans('messages.task') }}</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task) 
                                    <tr>
                                        <td class="table-text"><div>{{$task->name}}</div></td>
                                        <td>                                           
                                            <a class="btn btn-danger" href="{{url('delete/'.$task->id)}}">
                                                <i class="fa fa-btn fa-trash"></i>{{ trans('messages.delete') }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div> 
    </div>
@endsection

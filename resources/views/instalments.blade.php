@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">اقساط فعال عادی</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr class="bg-info">
                        <th class="text-center">اصلاح کاربر</th>
                        <th class="text-center">مبلغ قسط</th>
                        <th class="col-md-4 text-center">نام کاربر</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th class="text-center">
                            <a href="{{route('user_edit',['id' => $user->id])}}">
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-cog" style="color:darkblue"></span>
                                </button>
                            </a>
                        </th>
                        <th class="text-center">{{$user->instalment}}</th>
                        <th class="text-center"><a href="{{ route('user',['id'=>$user->id]) }}">{{$user->f_name." ".$user->l_name}}</a></th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center"> {{$users->links()}} </div>
            </div>

            <div class="panel-heading">اقساط فعال ضروری</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr class="bg-info">
                        <th class="col-md-2 text-center">حذف قسط</th>
                        <th class="text-center">مبلغ قسط</th>
                        <th class="col-md-4 text-center">نام کاربر</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users_force as $user_force)
                        <tr>
                            <th class="text-center">
                                <a href="{{route('user_edit',['id' => $user->id])}}">
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-cog" style="color:darkblue"></span>
                                    </button>
                                </a>
                            </th>
                            <th class="text-center">{{$user_force->instalment_force}}</th>
                            <th class="text-center"><a href="{{ route('user',['id'=>$user_force->id]) }}">{{$user_force->f_name." ".$user_force->l_name}}</a></th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center"> {{$users_force->links()}} </div>
            </div>

        </div>
    </div>
</div>
@endsection
@extends('layouts.master')

@section('content')
{{--    <h1 class="h3 mb-2 text-gray-800">Role Add</h1>--}}
{{--    <div class="card shadow mb-4">--}}
{{--        <div class="card-header py-3">--}}
{{--            <a href="{{url('role')}}" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Manage Role</a>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <form action="{{url('role')}}" method="post">--}}
{{--                {{csrf_field()}}--}}
{{--                <div class="form-group">--}}
{{--                    <label for="role">Role:</label>--}}
{{--                    <input type="text" class="form-control" name="role" id="role">--}}
{{--                    <span class="text-danger">{{$errors->has('role') ? $errors->first('role') : ''}}</span>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <button class="btn btn-success" type="submit">Submit</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
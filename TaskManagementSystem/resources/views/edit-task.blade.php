@extends('dashboard')
@section('app-wrapper')
    @parent
@section('edit-header')
    @parent
@section('edit-content-header')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Update Task
                </li>
            </ol>
        </div>
    </div>
@endsection
@endsection
@section('edit-body')
@parent
@section('edit-content-body')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-green">
                    <h5 class="mb-0 text-center clr-white"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" class="bi bi-building-fill-add" viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0" />
                            <path
                                d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-3.59 1.787A.5.5 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.5 4.5 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                        </svg> Update New Task</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('task-update') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="d-block mb-0">Update New Task</label>
                                <input type="text" name="name" id="" class="box-input" value="{{$task->name}}">
                                <input type="hidden" name="user_id" value="{{$task->id}}">
                            </div>
                            
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <label for="" class="d-block mb-0">Deadline</label>
                                <input type="date" name="deadline" id="" class="box-input" value="{{date('Y-m-d',strtotime($task->deadline))}}">
                            </div>

                            <div class="col-md-6">
                                <label for="" class="d-block mb-0">Select Status</label>
                                <select name="status" class="box-input">
                                <option value="Pending" @if($task->status=="Pending") selected @endif>Pending</option>
                                <option value="Progress"  @if($task->status=="Progress") selected @endif>In Progress</option>
                                <option value="Completed" @if($task->status=="Completed") selected @endif>Completed</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="row d-flex justify-content-end my-1">
                        <div class="col-md-2 d-flex justify-content-end align-items-end">
                                <button type="submit"
                                    class="box-input bg-green d-flex justify-content-center align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentcolor"
                                        class="bi bi-database-fill-add" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1" />
                                        <path
                                            d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905" />
                                    </svg> <b style="margin-left:10px;">ADD</b></button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
@endsection

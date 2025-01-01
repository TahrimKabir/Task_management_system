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
                    Create Task
                </li>
            </ol>
        </div>
    </div>
@endsection
@endsection
@section('edit-body')
@parent
@section('edit-content-body')
<div class="row mb-2">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-green">
             <div class="row">
                <div class="col-md-12">
                <label for="" class="d-block mb-0">Select Status</label>
                                <select name="status" class="box-input" id="statusFilter">
                                    <option value="" selected disabled>Select status</option>
                                <option value="Pending">Pending</option>
                                <option value="Progress" >In Progress</option>
                                <option value="Completed">Completed</option>
                                </select>
                </div>
             </div>
            </div>
        </div>
    </div>
</div>
    <div class="row d-flex justify-content-center">
       <div class="col-12">
        <div class="card">
            <div class="card-body">
            <table id="TaskTable" class="">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Name</th>
                    <th>Deadline</th>
                    <th>Task Status</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
            </div>
        </div>
       </div>
    </div>
@endsection
@endsection
@endsection

@section('scripts')
@parent
<script>
        // $(document).ready(function () {
        //     $('#TaskTable').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: "{{ route('task.data') }}",
                
        //         columns: [
        //             { data: 'id', name: 'id' },
        //             { data: 'name', name: 'name' },
        //             { data: 'deadline', name: 'deadline' },
        //             { data: 'status', name: 'status' },
        //             { data: 'action', name: 'action', orderable: false, searchable: false },
        //         ]
        //     });
       
    
        // });
        $(document).ready(function () {
    var table = $('#TaskTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('task.data') }}",
            data: function (d) {
                d.status = $('#statusFilter').val(); // Pass the status filter value
            }
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'deadline', name: 'deadline' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });

    // Trigger table reload on status filter change
    $('#statusFilter').change(function () {
        table.draw();
    });
});

    </script>
@endsection
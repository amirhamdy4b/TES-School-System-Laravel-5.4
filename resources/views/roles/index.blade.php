@extends('layouts.master')

@section('title', 'Roles')

@section('css')
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="ibox-title">
                        <h5>Courses Table Data</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <a href="{{ route('roles.create') }}" class="btn btn-success">New Role</a>
                                <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr class="gradeX">
                                        <td class="text-center">{{ $role->id }}</td>
                                        <td class="text-center">{{ $role->display_name }}</td>
                                        <td class="text-center">{{ $role->description }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-info"
                                               href="{{ route('roles.show',$role->id) }}">
                                                <i class="fa fa-external-link"></i> Show</a>
                                            <a class="btn btn-primary"
                                               href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-edit"></i>
                                                Edit</a>
                                            <form action="{{ url('admin/roles/'.$role->id) }}" method="POST"
                                                  style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" id="delete-task-{{ $role->id }}"
                                                        class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center"></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js')}}"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {
            $('.dataTables-example').DataTable({
                pageLength: 5,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {
                        extend: 'print',
                        customize: function (win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>
@endsection


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="table-responsive">
    @csrf
    <table id="editable" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
    <script>
        $(document).ready( () => {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-Token' : $("input[name=_token]").val()
                }
            });
            $('#editable').Tabledit({
                url:'{{ route("users.action") }}',
                dataType:'json',
                eventType: 'click',
                restoreButton: false,
                editButton: false,
                toolbarClass: 'd-flex',
                columns:{
                    identifier: [0, 'id'],
                    editable: [ [1, 'name'], [2, 'email'] ]
                },
                onSuccess: (data, textStatus, jqXHR) => {
                    if(data.action == 'delete') {
                        $('#'+data.id).remove();
                    }
                    else{
                        location.reload();
                    }
                }
            });
        });
    </script>
@stop
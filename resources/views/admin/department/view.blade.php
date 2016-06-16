@extends('admin.master')
@section('action','Employees List In Department')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTable">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 1; ?>
        @foreach($data as $item )
            <tr class="odd gradeX" align="center">
                <td>{!! $stt ++!!}</td>
                <td><img src="{!! asset('resources/uploads/'.$item['image']) !!}" height="50px" width="50px" /></td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! $item['email'] !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@endsection
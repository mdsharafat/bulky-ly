@extends('layouts.app')
@section('header-script')
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/dataTables.foundation.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <style>
        .custom_row_css{
            position: absolute;
            left: 24%;
            top: 18%;
            width: 78%;
        }
        .pagination {
            float: right;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row custom_row_css">
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">


                        <ul class="list-inline">
                            <li>
                                <form>
                                    <input class="form-control" type="text" name="search" placeholder="Search">
                                    <button class="pull-right" style=" position: relative; margin-top: -27px; border: 0px; background: 0px;  padding-right: 12px; outline: none !important;"> <i class="glyphicon glyphicon-search"></i> </button>
                                </form>
                            </li>
                            <li>
                                <div>
                                    <select name="" id="">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </li>
                        </ul>

                        <table class="table table-bordered" id="bufferPosting">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Group Type</th>
                                    <th>Account Name</th>
                                    <th>Post Text</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->groupInfo->name }}</td>
                                        <td>{{ $row->groupInfo->type }}</td>
                                        <td>{{ $row->accountInfo->user->name }}</td>
                                        <td>{{ $row->post_text }}</td>
                                        <td>{{ $row->sent_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $data->links() }}


                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
    <script type="text/javascript" src="{{ asset('/js/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bufferPosting').DataTable({
                "searching": false,
                "paging": false,
                "ordering": false
            });
        } );
    </script>
@endsection
@extends('layouts.app')
@section('header-script')
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/dataTables.foundation.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet"/>

    <style>
        .custom_row_css{
            position: absolute;
            left: 24%;
            top: 31%;
            width: 78%;
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
                                <a class="btn btn-primary" href="/admin/manage-user/create"> Create Account</a>
                            </li>
                            <li>
                                <form>
                                    <input class="form-control" type="text" name="search" placeholder="Search">
                                    <button class="pull-right" style=" position: relative; margin-top: -27px; border: 0px; background: 0px;  padding-right: 12px; outline: none !important;"> <i class="glyphicon glyphicon-search"></i> </button>
                                </form>
                            </li>
                        </ul>

                        <table class="table table-bordered" id="bufferPosting">
                            <thead>
                                <tr>
                                    <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Created Date</th> <th>Subscription plan</th> <!--<th>Last payment date</th> --> <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AAAA</td>
                                    <td>BBBB</td>
                                    <td><p style="word-break: break-all;">CCCC</p></td>
                                    <td>DDDD</td>
                                    <td>EEEE</td>
                                    <td> <a href="">Edit</a> </td>

                                </tr>
                            </tbody>
                        </table>


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
                "searching": true,
                "paging": true,
                "ordering": true
            });
        } );
    </script>
@endsection
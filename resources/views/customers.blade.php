@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h3>Customers</h3>
            <table id="customers" class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>DOB</th>
                        <th width="70">Action</th>
                    </tr>
                </thead>

            </table>

            <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

            <!--js code here-->
            
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>

@endsection
@extends('admin_layout')
@section('admin_content')

<div class="col-12">
    <div class="card mb-3">
        <div class="card-header">
            <h3><i class="fas fa-user-friends"></i> Users details</h3>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- end table-responsive-->

        </div>
        <!-- end card-body-->
    </div>
    <!-- end card-->
</div>

@endsection
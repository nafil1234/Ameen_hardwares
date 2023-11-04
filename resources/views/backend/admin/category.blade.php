@extends('backend.layouts.admin_main_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        {{-- <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Basic Elements</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Basic Elements</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div> --}}
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Category</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="{{ route('categorystore') }}" name="category" method="POST">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" name="txtCategoryName" placeholder="category name" id="txtCategoryName">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Category Image</label>
                                            <input type="file" class="form-control" name="CategoryImage" id="CategoryImage">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                    </div>
                                    <!--end col-->
                               
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Category List</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="card-datatable table-responsive pt-0">
                            <table id="tblCategory" class="table">
                                <thead class="border-bottom">
                                    <tr>
                                        <th>S.No</th>
                                        <th>CATEGORY IMAGE</th>
                                        <th>CATEGORY NAME</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div> <!-- container-fluid -->
</div>
@endsection

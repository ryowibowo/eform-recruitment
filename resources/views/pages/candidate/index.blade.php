@extends('layouts.default')

@section('title', 'Candidate')

@push('css')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kandidat</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Candidate</li>
        </ol>
    </div>
    <div class="row mb-3">
        {{-- Datatables --}}
        <div class="col-lg-12">
            <div class="card mb-4">
                {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                </div> --}}
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Position</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Place Birth</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    {{-- Page level plugins --}}
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    {{-- Page level custom scripts --}}
    <script>
         $(document).ready(function () {
            var dtTable = $('#dataTable').DataTable({
                    "columnDefs": [ {
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                    } ],

                    processing: true,
                    serverSide: true,
                    lengthMenu: [5, 10, 20, 50, 100, 200],
                    ajax: {
                        "url" : "{!! route('candidate.datatables') !!}",
                        "data": function ( d ) {
                        }
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        { data: 'posisition_applied', posisition_applied: 'name' },
                        { data: 'full_name', name: 'full_name' },
                        { data: 'gender', name: 'gender' },
                        { data: 'place_of_birth', name: 'place_of_birth' },
                        { data: 'action', name: 'action', orderable: false, searchable: false, className: 'text-center display-block' }

                    ],
                    order: [[ 0, 'asc' ]],
                    drawCallback: function () {
                }
            }); 
        });
    </script>
@endpush
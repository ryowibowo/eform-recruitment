<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo/logo.png" rel="icon">
        <title>RuangAdmin - Register</title>
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/ruang-admin.min.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gradient-login">
        {{-- Register Content --}}
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card shadow-sm my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-form">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Form Pengisian Data Pelamar</h1>
                                        </div>
                                        <form method="POST" action="{{ route('form_kandiat.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Posisi yang Dilamar &nbsp;<b style="color:red">*</b></label>
                                                <input type="text" name="posisition_applied" class="form-control" id="exampleInputFirstName">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Lengkap &nbsp;<b style="color:red">*</b> </label>
                                                <input type="text" name="full_name" class="form-control" id="exampleInputLastName">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin &nbsp;<b style="color:red">*</b> </label>
                                                <select class="form-control" name="gender">
                                                    <option value="">--Pilih--</option>
                                                    <option value="laki-laki">Laki-Laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">Tempat Lahir &nbsp;<b style="color:red">*</b></label>
                                                        <input type="text" class="form-control"
                                                             name="place_of_birth"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">Tanggal Lahir &nbsp;<b style="color:red">*</b></label>
                                                        <input type="date" class="form-control"
                                                            placeholder="tanggal_lahir"
                                                             name="date_of_birth" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Kewarganegaraan &nbsp;<b style="color:red">*</b> </label>
                                                <input type="text" name="nationality" class="form-control" id="exampleInputLastName">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Sekarang</label>
                                                <textarea name="address" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Nomor Handphone &nbsp;<b style="color:red">*</b></label>
                                                <input type="number" name="phone_number" class="form-control" id="exampleInputFirstName">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                                            </div>

                                            <div class="container my-4">
                                                <h1 class="h5 text-gray-900 mb-4">Pengalaman Kerja</h1>
                                                <div id="dynamic-field-1" class="form-group dynamic-field">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleDropdownFormEmail1">Nama Perusahaan &nbsp;<b style="color:red">*</b></label>
                                                                <input type="text" class="form-control"
                                                                     name="company_name[]"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleDropdownFormEmail1">Posisi &nbsp;<b style="color:red">*</b></label>
                                                                <input type="text" class="form-control"
                                                                     name="posisition[]"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleDropdownFormEmail1">Tanggal Masuk &nbsp;<b style="color:red">*</b></label>
                                                                <input type="date" class="form-control"
                                                                     name="date_start[]" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleDropdownFormEmail1">Tanggal Keluar &nbsp;<b style="color:red">*</b></label>
                                                                <input type="date" class="form-control"
                                                                     name="date_end[]" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alasan Keluar &nbsp;<b style="color:red">*</b></label>
                                                        <input type="text" id="field" class="form-control" name="reason_leaving[]" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleDropdownFormEmail1">Deskripsi Pekerjaan &nbsp;<b style="color:red">*</b></label>
                                                        <input type="text" class="form-control"
                                                             name="job_desc[]"
                                                            required>
                                                    </div>
                                                <hr>

                                                </div>
                                                <div class="clearfix mt-4">
                                                    <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Tambah</button>
                                                    <button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fas fa-minus fa-fw"></i> Hapus</button>
                                                </div>
                                            </div>
                                           

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                                            </div>
                                            <hr>
                                           
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Register Content --}}
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
        <script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script>

            @if(Session::has('message_alert'))  
                swal(
                    'Success!',
                    '{{ Session::get("message_alert") }}',
                    'success'
                );
            @endif

            $(document).ready(function() {
            var buttonAdd = $("#add-button");
            var buttonRemove = $("#remove-button");
            var className = ".dynamic-field";
            var count = 0;
            var field = "";
            var maxFields = 5;

            function totalFields() {
                return $(className).length;
            }

            function addNewField() {
                count = totalFields() + 1;
                field = $("#dynamic-field-1").clone();
                field.attr("id", "dynamic-field-" + count);
                field.children("label").text("Field " + count);
                field.find("input").val("");
                $(className + ":last").after($(field));
            }

            function removeLastField() {
                if (totalFields() > 1) {
                $(className + ":last").remove();
                }
            }

            function enableButtonRemove() {
                if (totalFields() === 2) {
                buttonRemove.removeAttr("disabled");
                buttonRemove.addClass("shadow-sm");
                }
            }

            function disableButtonRemove() {
                if (totalFields() === 1) {
                buttonRemove.attr("disabled", "disabled");
                buttonRemove.removeClass("shadow-sm");
                }
            }

            function disableButtonAdd() {
                if (totalFields() === maxFields) {
                buttonAdd.attr("disabled", "disabled");
                buttonAdd.removeClass("shadow-sm");
                }
            }

            function enableButtonAdd() {
                if (totalFields() === (maxFields - 1)) {
                buttonAdd.removeAttr("disabled");
                buttonAdd.addClass("shadow-sm");
                }
            }

            buttonAdd.click(function() {
                addNewField();
                enableButtonRemove();
                disableButtonAdd();
            });

            buttonRemove.click(function() {
                removeLastField();
                disableButtonRemove();
                enableButtonAdd();
            });
            });
        </script>
    </body>
</html>
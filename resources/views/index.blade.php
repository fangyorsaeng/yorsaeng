<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TconHouse</title>
    <link rel="icon" href="{{ asset('/logonew.jpg') }}">
    <!-- Tell the browser to be responsive to screen width -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- <link rel="stylesheet" href="{{ asset('/admin/plugins/datepicker/datepicker3.css') }}"> -->
    <!-- summernote -->
    <link rel="stylesheet" href="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    @yield('header')


    <style>
        @media print {
            .no-printA {
                display: none !important;
            }
        }


        .datepicker {
            z-index: 1190 !important;
        }

        .modal-backdrop {
            width: 100% !important;
            height: 100% !important;
        }

        .hr-custom {
            border-bottom: 1px solid #db7474;
        }

        .hr-custom-gray {
            border-bottom: 1px solid gray;
        }

        .hr-custom-red {
            border-bottom: 1px solid red;
        }

        .hr-custom-green {
            border-bottom: 1px solid green;
        }

        .hr-custom-info {
            border-bottom: 1px solid blue;
        }

        .m-box {
            border: 1px solid #ddd;
            padding: 5px;
        }

        .title-color {
            color: red;
        }

        input.empty {
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
        }

        [v-cloak]>* {
            display: none;
        }

        [v-cloak]::before {
            content: " ";
            display: block;
            position: absolute;
            width: 80px;
            height: 80px;
            background-size: cover;
            left: 50%;
            top: 50%;
        }

        .m-pointer {
            cursor: pointer;
        }

        .line-info {
            -webkit-box-shadow: 0 8px 6px -6px #17a2b8;
            width: 100%;
        }

        .line-success {
            -webkit-box-shadow: 0 8px 6px -6px green;
            width: 100%;
        }

        .line-danger {
            -webkit-box-shadow: 0 8px 6px -6px red;
            width: 100%;
        }

        .line-warning {
            -webkit-box-shadow: 0 8px 6px -6px #ffc107;
            width: 100%;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 30px;
        }

        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 30px !important;
            padding-top: 3px !important;
            user-select: none;
            -webkit-user-select: none;
        }
    </style>
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-2">
                </div>
                @foreach ($fangs as $fang)
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="/storage/{{$fang->photo}}" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ $fang->name }}</h3>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>{{ $fang->name }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ $fang->age }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ $fang->nickName }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ $fang->phone }}</b>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#staticBackdrop">
                                แก้ไข
                            </button>
                            <form action="/yorsaeng/delete{{$fang->id}}" method="post" onsubmit="return confirm('ลบหรือไม่ ?')">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block"><b>ลบ</b></button>
                            </form>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="card ">
                                            <form action="/yorsaeng/update{{$fang->id}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body box-profile">
                                                    <div class="col-auto">
                                                        <label>รุปภาพ</label>
                                                        <input class="form-control" type="file" name="photo" multiple>
                                                    </div>

                                                    <div class="col-auto">
                                                        <label for="fang_name" class="col-form-label">ชื่อ</label>
                                                        &nbsp; &nbsp;
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="text" name="name" id="" class="form-control" aria-describedby="" value="{{ $fang->name }}">
                                                    </div>
                                                    <div class="col-auto">
                                                        <label for="fang_age" class="col-form-label">อายุ</label>
                                                        &nbsp; &nbsp;
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="number" name="age" id="" class="form-control" aria-describedby="" value="{{ $fang->age }}">
                                                    </div>
                                                    <div class="col-auto">
                                                        <label for="fang_nickName" class="col-form-label">ชื่อเล่น</label>
                                                        &nbsp; &nbsp;
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="text" name="nickName" id="" class="form-control" aria-describedby="" value="{{ $fang->nickName }}">
                                                    </div>
                                                    <div class="col-auto">
                                                        <label for="fang_phone" class="col-form-label">เบอร์โทร</label>
                                                        <input type="text" name="phone" id="" class="form-control" aria-describedby="" value="{{ $fang->phone }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                        <button type="summit" class="btn btn-success">บันทึก</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/moment/moment.min.js"></script>
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- <script src="{{ asset('/admin/plugins/datepicker/bootstrap-datepicker.js') }}"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://taweechai-bucket.s3-ap-southeast-1.amazonaws.com/upvc/admin/dist/js/demo.js"></script>
</body>

</html>
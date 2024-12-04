<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Menu rumah sakit</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('template/css/simple-sidebar.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Rumah Sakit
                    </a>
                </li>
                <li>
                    <a href="/cabang">Cabang Rumah sakit</a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="/dataPasien">Data Pasien</a>
                </li>
                <li>
                    <a href="/dataDokter">Data Dokter</a>
                </li>
                <li>
                    <a href="/dataPoliklinik">Data Poliklinik</a>
                </li>
                <li>
                    <a href="/dataObat">Data Obat</a>
                </li>
                <li>
                    <a href="/rekamMedis">Rekam Medis</a>
                </li>
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Data Rekam Medis</h1>
                        <p>Berikut adalah daftar rekam medis<br><br>Daftar beserta nama pasien</p>
                    </div>
                    <table>
                        <thead>
                           <tr>
                            <th>No</th>
                            <th>Nama pasien</th>
                            <th>Kontak pasien</th>
                            <th>Cabang tempat berobat</th>
                           </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                            <td>Miranda</td>
                            <td>0812345557</td>
                            <td>Cabang Kulim</td>
                            </tr>
                            <tr>
                                <td>2</td>
                            <td>Ridho</td>
                            <td>088271255671</td>
                            <td>Cabang Hangtuah</td>
                            </tr>
                            <tr>
                                <td>3</td>
                            <td>Nina</td>
                            <td>080271255671</td>
                            <td>Cabang Rumbai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('template/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

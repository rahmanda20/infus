<!-- View admin.dashboard -->

@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <div style="display:flex;">
        <form action="/dashboard" class="row g-3" method="get">
            <div style="margin:20px 5px 15px 25px;">
                <!-- <select name="tahun" id="tahun" onchange="document.getElementById('my-form').submit()">
                    <option value="">Tahun</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select> -->
            </div>
            <div style="width:600px;">
                <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn mb-2" style="background:#1e90ff; color:white">search</button>
            </div>
        </form>
    </div>
    <div style="width: 100%; display: flex;">
        <div id="grafik" style="flex: 1;">
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script>
                Highcharts.chart("grafik", {
                    chart: {
                        type: "column",
                    },
                    title: {
                        text: "Jumlah Pasien Berdasarkan Penyakit",
                    },
                    subtitle: {
                        text: "Pekanbaru",
                    },
                    xAxis: {
                        categories: {!! json_encode($no_alat) !!},
                        crosshair: true,
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: "",
                        },
                    },
                    tooltip: {
                        headerFormat:
                            '<span style="font-size:10px">{point.key}</span><table>',
                        footerFormat: "</table>",
                        shared: true,
                        useHTML: true,
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0,
                        },
                    },
                    series: [
                        {
                            name: "Total",
                            data: {!! json_encode($nama_pasien) !!},
                        },
                    ],
                });
            </script>
        </div>

        <?php
// Data Dummy Nama Penyakit
$nama_penyakit = [
    "Demam Berdarah",
    "Infeksi Saluran Pernapasan Akut (ISPA)",
    "Diare",
    "Tuberkulosis",
    "Malaria",
    "Hipertensi",
    "Diabetes Mellitus",
    "Stroke",
    "Jantung Koroner",
    "Kanker"
];
?>

<div id="pie-chart" style="flex: 1; margin-left: 10px;">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart("pie-chart", {
            chart: {
                type: "pie",
            },
            title: {
                text: "Jumlah Infus Berdasarkan Penyakit",
                align: "left",
            },
            series: [
                {
                    name: "Total",
                    data: [
                        { name: "Demam Berdarah", y: 15 },
                        { name: "Infeksi Saluran Pernapasan Akut (ISPA)", y: 10 },
                        { name: "Diare", y: 8 },
                        { name: "Tuberkulosis", y: 20 },
                        { name: "Malaria", y: 12 },
                        { name: "Hipertensi", y: 5 },
                        { name: "Diabetes Mellitus", y: 18 },
                        { name: "Stroke", y: 14 },
                        { name: "Jantung Koroner", y: 9 },
                        { name: "Kanker", y: 7 }
                    ],
                },
            ],
        });
    </script>
</div>

    </div>
</div>
@endsection

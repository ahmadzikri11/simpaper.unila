<x-app-layout>

    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> </div>
                <canvas id="myChart" width="100" height="100"></canvas>
                <div class="card-body">
                    <div id="grafik"></div>

                </div>
            </div>
        </div>
    </div>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
        var total_upload = <?php echo json_encode($total_upload) ?>;
        var bulan = <?php echo json_encode($bulan) ?>;
        Highcharts.chart('grafik',{
            title : {
                text: 'Grafik Upload Bulanan'
            },
            xAxis : {
                categories : bulan
            },
            yAxis : {
                title : {
                    text : 'upload'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [
                {
                    name: 'jumlah upload',
                    data: total_upload
                }
            ]
        });
    </script>

    // <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    // <script type="text/javascript">
    //     var totalUpload = new Array();
    //     totalUpload = {
    //         {
    //             $total_upload
    //         }
    //     };

    //     var bulan = new Array();
    //     bulan = @json($bulan);

    //     const labels = bulan;

    //     const data = {
    //         labels: labels,
    //         datasets: [{
    //             label: 'Total Upload',
    //             data: totalUpload,
    //             backgroundColor: '#2a61b5',
    //             borderColor: '#2a61b5',
    //             borderWidth: 1
    //         }]
    //     };

    //     console.log(data);
    //     console.log(labels);

    //     const config = {
    //         type: 'bar',
    //         data: data,
    //         options: {}
    //     };

    //     const chart = new Chart(document.getElementById('myChart'), config);

    // </script> 




</x-app-layout>

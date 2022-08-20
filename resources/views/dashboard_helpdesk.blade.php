<x-app-layout>


    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>


    <div style="width: 600px">
        <canvas id="myChartHigh"></canvas>
    </div>

    <div style="width: 600px">
        <canvas id="myChartMedium"></canvas>
    </div>

    <div style="width: 600px">
        <canvas id="myChartLow"></canvas>
    </div>



    <script>
        // var url = "{{ url('/getDataChart') }}";
        // var raw = new Array();

        // $(document).ready(function() {
        //     $.get(url, function(response) {
        //         raw.push(response);
        //     });
        // });
        // var dataBulan = JSON.parse(bulan.replace(/&quot;/g, '"'));



        // const labels = [
        //     'Januari',
        //     'Februari',
        //     'Maret',
        //     'April',
        //     'Mei',
        //     'Juni',
        //     'Juli',
        //     'Agustus',
        //     'September',
        //     'Oktober',
        //     'November',
        //     'Desember'
        // ];

        // high
        var bulanhigh = new Array();
        bulanhigh = @json($monthhigh);

        var high = new Array();
        high = {{ $graphpriohigh }};

        const labelsHigh = bulanhigh;

        const dataHigh = {
            labels: labelsHigh,
            datasets: [{
                label: 'Jumlah Prioritas High',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                // borderWidth: 3,
                // borderColor: 'red',
                data: high
            }]
        };

        const configHigh = {
            type: 'bar',
            data: dataHigh,
            options: {}
        };

        const myChartHigh = new Chart(
            document.getElementById('myChartHigh'),
            configHigh
        );

        // Medium
        var bulanmedium = new Array();
        bulanmedium = @json($monthmedium);

        var medium = new Array();
        medium = {{ $graphpriomedium }};

        const labelsMedium = bulanmedium;

        const dataMedium = {
            labels: labelsMedium,
            datasets: [{
                label: 'Jumlah Prioritas Medium',
                backgroundColor: 'green',
                borderColor: 'green',
                // backgroundColor: 'rgb(255, 99, 132)',
                // borderColor: 'rgb(255, 99, 132)',
                // borderWidth: 3,
                // borderColor: 'red',
                data: medium
            }]
        };


        const config = {
            type: 'bar',
            data: dataMedium,
            options: {}
        };


        const myChartMedium = new Chart(
            document.getElementById('myChartMedium'),
            config
        );

        // low
        var bulanlow = new Array();
        bulanlow = @json($monthlow);

        var low = new Array();
        low = {{ $graphpriolow }};

        const labelsLow = bulanlow;

        const dataLow = {
            labels: labelsLow,
            datasets: [{
                label: 'Jumlah Prioritas Medium',
                backgroundColor: 'orange',
                borderColor: 'orange',
                // backgroundColor: 'rgb(255, 99, 132)',
                // borderColor: 'rgb(255, 99, 132)',
                // borderWidth: 3,
                // borderColor: 'red',
                data: low
            }]
        };


        const configLow = {
            type: 'bar',
            data: dataLow,
            options: {}
        };


        const myChartLow = new Chart(
            document.getElementById('myChartLow'),
            configLow
        );
    </script>

</x-app-layout>

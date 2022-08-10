<x-app-layout>


    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <div style="width: 500px">
        <canvas id="myChart"></canvas>
    </div>




    <script>
        var url = "{{ url('/getDataChart') }}";
        var raw = new Array();

        $(document).ready(function() {
            $.get(url, function(response) {
                raw.push(response);
            });
        });

        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        console.log(raw);
        const data = {
            labels: labels,
            datasets: [{
                label: 'Jumlah Prioritas',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                // borderWidth: 3,
                // borderColor: 'red',
                data: [raw]
            }]
        };

        console.log(data);
        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</x-app-layout>

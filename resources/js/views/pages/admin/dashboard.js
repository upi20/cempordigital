$(document).ready(function () {
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    function cb(start, end) {
        $('#datepicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        const date_start = start.format('YYYY-MM-DD');
        const date_end = end.format('YYYY-MM-DD');
        refreshVistor({
            start: date_start,
            end: date_end
        });
    }

    $('#datepicker').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Hari ini': [moment(), moment()],
            'Hari Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
            'Bulan kemarin': [moment().subtract(1, 'month').startOf('month'),
            moment().subtract(1, 'month').endOf('month')
            ],
        }
    }, cb);

    cb(start, end);

    $('#datepicker').on('apply.daterangepicker', function (ev, picker) {
        global_date_start = picker.startDate.format('YYYY-MM-DD');
        global_date_end = picker.endDate.format('YYYY-MM-DD');
    });
});

function refreshVistor(tanggal) {
    // console.log(tanggal);
    const container = $('#penghitung-container');
    container.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: "{{ route(l_prefix($hpu,'vistor_counter')) }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: tanggal,
        success: (data) => {
            // console.log(data);
            renderChart(data);
            container.LoadingOverlay("hide");
        },
        error: function (data) {
            // console.log(data);
            container.LoadingOverlay("hide");
        },
        complete: function () {
            container.LoadingOverlay("hide");
        }
    });
}

function renderChart(datas) {
    const columns = ['data1'];
    const categories = [];

    datas.forEach(e => {
        columns.push(e.value);
        categories.push(e.title);
    })

    var chart = c3.generate({
        bindto: '#chart-pengunjung', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                columns
            ],
            type: 'bar', // default type of chart
            colors: {
                data1: '#6c5ffc'
            },
            names: {
                // name of each serie
                'data1': 'Pengunjung'
            },
            labels: true,
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: categories
            },
        },
        // bar: {
        //     width: 16
        // },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: 0,
            top: 0
        },
    });
}

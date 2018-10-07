$(document).ready(function() {
    $.ajax({
        type: "get",
        url: "utils/getCat.php",
        success: function(response) {
            var data = JSON.parse(response);
            var cat = [];
            var count = [];

            data.forEach(obj => {
                cat.push(obj.category);
                count.push(obj.category_count);

            });



            let myChart1 = document.getElementById('myChart1').getContext('2d');

            // Global Options
            Chart.defaults.global.defaultFontFamily = 'Trebuchet MS';
            Chart.defaults.global.defaultFontSize = 18;
            Chart.defaults.global.defaultFontColor = '#777';

            let massPopChart1 = new Chart(myChart1, {
                type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                data: {
                    labels: cat,
                    datasets: [{
                        label: 'Performance',
                        data: count,
                        //backgroundColor:'green',
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                        ],
                        borderWidth: 1,
                        borderColor: '#777',
                        hoverBorderWidth: 3,
                        hoverBorderColor: '#000'
                    }]
                },
                options: {
                    title: {
                        display: false,
                        text: 'Student Performance Distribution',
                        fontSize: 25

                    },
                    legend: {
                        display: true,
                        position: 'left',
                        labels: {
                            fontColor: '#000'
                        }
                    },
                    layout: {
                        padding: {
                            left: 50,
                            right: 0,
                            bottom: 0,
                            top: 0
                        }
                    },
                    tooltips: {
                        enabled: true
                    }
                }
            });
        }
    });
});
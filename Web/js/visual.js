$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "utils/utscores.php",
        success: function(response) {
            var data = JSON.parse(response);
            var ut1 = [];
            var ut2 = [];
            var subjs = [];

            data.forEach(obj => {
                ut1.push(obj.ut1_marks);
                ut2.push(obj.ut2_marks);
                subjs.push(obj.subject_name);
            });
            let myChart1 = document.getElementById('myChart1').getContext('2d');

            // Global Options
            Chart.defaults.global.defaultFontFamily = 'Trebuchet MS';
            Chart.defaults.global.defaultFontSize = 16;
            Chart.defaults.global.defaultFontColor = '#777';

            let massPopChart1 = new Chart(myChart1, {
                type: 'bar',
                scaleStartValue: 0, // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                data: {
                    labels: subjs,
                    datasets: [{
                        label: 'WT',
                        data: ut1,
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

                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {

                                suggestedMin: 0,
                                max: 30 // minimum value will be 0.
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'UNIT 1',
                        fontSize: 12
                    },
                    legend: {
                        display: false,
                        position: 'top',
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

            let myChart2 = document.getElementById('myChart2').getContext('2d');

            // Global Options
            Chart.defaults.global.defaultFontFamily = 'Trebuchet MS';
            Chart.defaults.global.defaultFontSize = 16;
            Chart.defaults.global.defaultFontColor = '#777';

            let massPopChart2 = new Chart(myChart2, {
                type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                data: {
                    labels: subjs,
                    datasets: [{
                        label: 'WT',
                        data: ut2,
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
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {

                                suggestedMin: 0,
                                max: 30 // minimum value will be 0.
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'UNIT 2',
                        fontSize: 12
                    },
                    legend: {
                        display: false,
                        position: 'top',
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
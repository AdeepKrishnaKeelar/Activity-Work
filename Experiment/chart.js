let myChart = document.getElementById('myChart').getContext('2d');

let barChart = new Chart(myChart,{
    type:'bar',
    data:{
        labels:['17','18','19','20','21'],
        datasets:[{
            label:'Pass Percent',
            data:[
                61.04,
                96.15,
                87.09,
                62.06,
                100
            ]
        }]
    },
    options:{}

});
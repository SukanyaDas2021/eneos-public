


const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['IL0', 'IL1', 'IL2', 'IL3', 'IL4', 'IL5'],
        datasets: [
            {
                label: 'ID',
                data: [12, 19, 23, 15, 5, 19],
                borderWidth: 1,     
            }
        ],
        
    },
    options: {
        scales: {
        y: {
                beginAtZero: true
            }
        },
        borderColor: '#422BD4',
        backgroundColor: '#422BD4',
        borderRadius: 10,
        barPercentage: 0.5,
        
    }
});

const chart2 = document.getElementById('chart2');

new Chart(chart2, {
    type: 'doughnut',
    data: {
        labels: ['NE', 'EMEA', 'APAC', 'Others'],
        datasets: [
            {
                label: 'ID',
                data: [12, 19, 3, 5],
                borderWidth: 1, 
                backgroundColor: [
                    'rgba(255, 99, 132, 0.9)',
                    'rgba(255, 159, 64, 0.9)',
                    'rgba(255, 205, 86, 0.9)',
                    'rgba(75, 192, 192, 0.9)'
                ],    
            }
        ],        
    },
    options: {
        aspectRatio:2,
        plugins: {
            legend: {
                display: true,
                position: 'right',
            }
        }
    }
});

const chart3 = document.getElementById('chart3');

new Chart(chart3, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [
            {
                label: 'ID',
                data: [12, 19, 23, 15, 25, 19],
                borderWidth: 3,  
            }
        ],
        
    },
    options: {
        fill: true,
        borderColor: 'rgba(66, 43, 212, 1)',
        backgroundColor: 'rgba(66, 43, 212, 0.5)',
        tension: 0.4,
    }
});
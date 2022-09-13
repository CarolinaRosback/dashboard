<?php

//include_once DIR_TEMPLATE."/em_construcao.php";?>


<div>
<canvas id="myChart" width="800" height="200"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
//pegar variaveis do banco e colocar no array
const labels = [
'Janeiro',
'Fevereiro',
'Março',
'Abril',
'Maio',
'Junho',
];

const data = {
labels: labels,
datasets: [
    {
    label: 'Faturamento',
    backgroundColor: 'rgb(154,205,50)',
    borderColor: 'rgb(154,205,50)',
    //posicao das linhas no grafico conforme array
    data: [0, 10, 5, 2, 20, 30, 45]
    },
    {
    label: 'Despesas',
    backgroundColor: 'rgb(0,255,127)',
    borderColor: 'rgb(0,255,127)',
    //posicao das linhas no grafico conforme array
    data: [10, 5, 50, 20, 10, 20, 5]
    }
]
};

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
</div> 


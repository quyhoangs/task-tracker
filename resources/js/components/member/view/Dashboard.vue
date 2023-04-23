<template>
    <chart-component :chart-data="chartData" :chart-type="'pie'" :chart-options="chartOptions" />
    <chart-component :chart-data="chartData" :chart-type="'line'" :chart-options="chartOptions" />
    <chart-component :chart-data="chartData" :chart-type="'bar'" :chart-options="chartOptions" />
</template>

<script>
import ChartComponent from '../view/Dashboard/component/ChartComponent.vue';

export default {
    components: {
        ChartComponent
    },
    data() {
        return {
            chartData: {
                labels: ['Label 1', 'Label 2', 'Label 3'],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: [10, 20, 30],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                    },
                ]
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false
            }
        };
    }
};
</script>


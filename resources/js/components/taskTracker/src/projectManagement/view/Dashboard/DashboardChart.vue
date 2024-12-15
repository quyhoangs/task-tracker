<template>
    <div>
        <div class="flex">
            <div class="w-1/3 mr-2">
                <chart-component :chart-data="chartData" :chart-type="'pie'" :chart-options="chartOptions" />
            </div>

            <div class="w-1/3 mr-2">
                <chart-component :chart-data="chartData" :chart-type="'line'" :chart-options="chartOptions" />

            </div>

            <div class="w-1/3 mr-2">
                <chart-component :chart-data="chartData" :chart-type="'bar'" :chart-options="chartOptions" />
            </div>
        </div>
    </div>
</template>

<script>
import ChartComponent from '../Dashboard/component/ChartComponent.vue';

export default {
    components: {
        ChartComponent,
    },
    data() {
        return {
            chartData: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#FF6384', '#36A2EB', '#FFCE56', '#FF6384'],
                        data: [40, 20, 12, 39, 10, 40, 39],
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
            },
        };
    },

};

</script>

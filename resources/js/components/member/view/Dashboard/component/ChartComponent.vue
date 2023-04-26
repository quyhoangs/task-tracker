<template>
    <div>
        <canvas ref="chartCanvas"></canvas>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import Chart from 'chart.js/auto';

export default defineComponent({
    props: {
        chartData: {
            type: Object,
            required: true
        },
        chartType: {
            type: String,
            required: true
        },
        chartOptions: {
            type: Object,
            default: () => ({})
        }
    },
    mounted() {
        this.setCanvasSize();
        this.renderChart();
        window.addEventListener('resize', this.onWindowResize);
    },
    beforeUnmount() {
        window.removeEventListener('resize', this.onWindowResize);
    },
    methods: {
        setCanvasSize() {
            const containerRect = this.$el.getBoundingClientRect();
            this.$refs.chartCanvas.width = containerRect.width;
            this.$refs.chartCanvas.height = containerRect.height;
        },
        renderChart() {
            const ctx = this.$refs.chartCanvas.getContext('2d');
            new Chart(ctx, {
                type: this.chartType,
                data: this.chartData,
                options: this.chartOptions
            });
        },
        onWindowResize() {
            this.setCanvasSize();
            this.renderChart();
        }
    }
});
</script>

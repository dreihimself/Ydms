<template>
    <Head title="Dashboard" />
    <q-page class="q-pa-md">
      <div class="dashboard">
        <q-card class="big-card" style="margin-bottom: 20px; margin-right: 4%; margin-left: 4%">
          <q-card-section>
            <h3>City of San Fernando</h3>
          </q-card-section>
        </q-card>
        <q-card v-for="(card, index) in cards" :key="index" class="small-card" style="width: 30%; height: 170px; margin-right: 2%; margin-bottom: 20px; display: inline-block;" :style="{ 'margin-right': index % 3 === 2 ? '0' : '1%' }">
          <q-card-section>
            <p>{{ card.title }}</p>
            <canvas :id="'chart-' + index"></canvas>
          </q-card-section>
        </q-card>
      </div>
    </q-page>
  </template>

  <script>
  import { ref, onMounted } from 'vue';
  import Chart from 'chart.js/auto';

  export default {
    setup() {
      const cards = ref([
        { title: 'Total Youth', chartType: 'numeric', data: [10, 20, 30, 40, 50] },
        { title: 'Age Group', chartType: 'horizontalBar', data: [30, 50, 20, 60, 40] },
        { title: 'Sex', chartType: 'pie', data: [25, 25, 25, 25] },
        { title: 'Work Status', chartType: 'bar', data: [40, 30, 20, 10, 50] },
        { title: 'Voting Status', chartType: 'bar', data: [50, 10, 30, 20, 40] },
        { title: 'Educational Background', chartType: 'pie', data: [20, 30, 25, 25] },
        { title: 'Civil Status', chartType: 'pie', data: [10, 20, 30, 40] },
        { title: 'With Special Needs', chartType: 'bar', data: [60, 20, 40, 10, 30] },
        { title: 'Youth Classification', chartType: 'bar', data: [30, 40, 20, 50, 10] }
      ]);

      const initializeCharts = () => {
        cards.value.forEach((card, index) => {
          const ctx = document.getElementById(`chart-${index}`).getContext('2d');

          let chartType;
          switch (card.chartType) {
            case 'numeric':
              chartType = 'line';
              break;
            case 'horizontalBar':
              chartType = 'bar';
              break;
            case 'pie':
              chartType = 'pie';
              break;
            case 'bar':
            default:
              chartType = 'bar';
          }

          new Chart(ctx, {
            type: chartType,
            data: {
              labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
              datasets: [{
                label: 'Data',
                data: card.data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        });
      };

      onMounted(() => {
        initializeCharts();
      });

      return {
        cards
      };
    }
  };
  </script>

  <style>
  .dashboard {
    width: 100%;
    height: auto;
    max-width: 1200px;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
  }
  </style>

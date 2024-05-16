<template>
    <q-page class="q-pa-md">
      <!-- Dashboard wrapper for all cards -->
      <div class="dashboard">

          <!-- Big card serving as header -->
      <q-card class="big-card" style="margin-bottom: 20px; margin-right: 4%; margin-left:4%">
        <q-card-section>
          <!-- Content for the big card -->
          <h3>City of San fernando</h3>
        </q-card-section>
      </q-card>
        <!-- Cards in a grid layout -->
        <q-card v-for="(card, index) in cards" :key="index" class="small-card" style="width: 30%; height: 170px; margin-right: 2%; margin-bottom: 20px; display: inline-block;" :style="{ 'margin-right': index % 3 === 2 ? '0' : '1%' }">
          <q-card-section>
            <!-- Title for each small card -->
            <p>{{ card.title }}</p>
            <!-- Chart canvas -->
            <canvas :id="'chart-' + index"></canvas>
          </q-card-section>
        </q-card>
      </div>
    </q-page>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
//  import Chart from 'chart.js';
  
  export default {
    setup() {
      // Sample data for the cards (replace with fetched data)
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
  
      // Method to initialize chart for each card
      const initializeCharts = () => {
        cards.value.forEach((card, index) => {
          const ctx = document.getElementById(`chart-${index}`).getContext('2d');
  
          // Determine the chart type
          let chartType;
          switch (card.chartType) {
            case 'numeric':
              chartType = 'line';
              break;
            case 'horizontalBar':
              chartType = 'horizontalBar';
              break;
            case 'pie':
              chartType = 'pie';
              break;
            case 'bar':
            default:
              chartType = 'bar';
          }
  
          // Initialize the chart
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
  
      // Initialize charts when component is mounted
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
  /* Style for the dashboard wrapper */
  .dashboard {
    /* Define sizes and other properties */
    width: 100%; /* Adjust the width as needed */
    height: auto; /* Adjust the height as needed */
    max-width: 1200px; /* Set maximum width */
    padding: 20px; /* Add padding */
    box-sizing: border-box; /* Ensure padding is included in the width */
    text-align: center;
  }
  </style>
  
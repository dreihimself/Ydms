<template>
    <q-layout view="hHh lpR fFf">
      <q-page-container>
  <br>

        <div class="q-gutter-y-md bg-primary" style="width: 230px; margin-left: 30px;">


             <q-tabs v-model="tab">
                    <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
                      <div class="text-white" style="width: 100%; text-align: left; font-size: 12px;">Barangay Registry</div>
                    </q-tab>

                  </q-tabs>
                  </div>
        <q-separator color="black" style="margin-left: 30px;" />
        <q-page class="form-page">

          <div class="container">

            <!-- Form -->
            <div class="form-container">
              <div class="q-pa-md">

                <div class="q-form">

                  <div class="q-gutter-md" style=" margin-top: 40px; ">
                    <!-- Form Inputs -->
                    <q-input dense outlined required v-model="name" label="Barangay *" lazy-rules :rules="[val => val && val.length > 0 || 'Please type something']" style="width: 70%; padding: 3px; margin-left: 40px; box-sizing: border-box;" />
                    <q-input dense outlined required v-model="Cname" label="Name of Captain *" lazy-rules :rules="[val => val && val.length > 0 || 'Please type something']" style="width: 70%; padding: 3px; margin-left: 40px; box-sizing: border-box;" />
                    <q-input dense outlined required v-model="number" label="Captain Mobile No. *" lazy-rules :rules="[val => val && val.length > 11 || 'Please type something']" style="width: 70%; padding: 3px; margin-left: 40px; box-sizing: border-box;" />
                    <q-input dense outlined required v-model="SKname" label="Name of SK Captain *" lazy-rules :rules="[val => val !== null && val !== '' || 'Please type your password', val => val > 0 && val < 100 || 'Please type your real password']" style="width: 70%; padding: 3px; margin-left: 40px; box-sizing: border-box;" />
                    <q-input dense outlined required v-model="numberd" label="SK Mobile No. *" lazy-rules :rules="[val => val !== null && val !== '' || 'Please type your password', val => val > 0 && val < 11 || 'Please type your real password']" style="width: 70%; padding: 3px; margin-left: 40px; box-sizing: border-box;" />
                  </div>
                  <q-btn color="primary" label="Save" style="width: 20%; padding: 4px; margin-top: 30px; margin-left: 310px; box-sizing: border-box;" />
                </div>
              </div>
            </div>
            <!-- Table -->
            <div class="q-pa-ms table-container">
              <q-table flat bordered :rows="rows" :columns="columns" :row-key="name" />
            </div>
          </div>
        </q-page>
      </q-page-container>
    </q-layout>
  </template>

  <script>
  import { ref, onMounted } from 'vue';

  export default {
    setup() {
      const columns = [
        {
          name: 'name',
          required: true,
          label: 'Barangay Name',
          align: 'left',
          field: row => row.name,
          format: val => `${val}`,
          sortable: true,
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'captain',
          align: 'center',
          label: 'Name of Captain',
          field: 'captain',
          sortable: true,
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'mobile_number',
          label: 'Mobile No.',
          field: 'mobile_number',
          sortable: true,
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'sknme',
          label: 'SK Name',
          field: 'carbs',
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'skmon',
          label: 'SK Mobile No.',
          field: 'protein',
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        }
      ];

      const rows = ref([]);

      const fetchData = async () => {
        try {
          const response = await fetch('your-backend-endpoint'); // Replace 'your-backend-endpoint' with your actual API endpoint
          const data = await response.json();
          rows.value = data;
        } catch (error) {
          console.error('Error fetching data:', error);
        }
      };

      onMounted(() => {
        fetchData();
      });

      return {
        columns,
        rows
      };
    }
  };
  </script>

  <style>
  .container {
    display: flex; /* Use flexbox layout */
  }

  .form-container {
    flex: 1;
    position:static;
     /* Make the form container flexible */
  }

  .table-container {
    flex: 1;
    position: static;
    margin-top: 4%;  /* Set position to relative */

  }
  </style>

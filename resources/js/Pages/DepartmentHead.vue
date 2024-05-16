<template>
    <Head title="User Settings" />

    <div class="q-pa-md" style="margin-left: -45px; ">

      <div class="q-gutter-y-md bg-blue" style="width: 370px; margin-left: 30px;">
        <q-tabs v-model="tab">
          <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
            <div class="text-white" style="width: 100%; text-align: left">
              User Settings
            </div>
          </q-tab>
        </q-tabs>
      </div>
    </div>
    <q-separator color="black" style="margin-top: -17px; margin-left: 1px;"/>

    <!--Form-->
    <div class="row">
      <div class="col-6">
        <div class="q-pa-md row">
          <div class="col-4" style="padding-left: 10px;">
                <div class="user-settings-form">
                    <q-form @submit="saveSettings" class="q-gutter-md">
                        <q-input outlined v-model="name" label="Fullname" dense required/>
                        <div class="input-container">
                        <q-input outlined v-model="birthdate" label="Birthdate" dense required style="width: 100%; padding-right: 5px; box-sizing: border-box;"/>
                            <div>
                                <q-input outlined v-model="age" label="Age" dense style="width: 100px; padding-left: 10px;"/>
                            </div>
                        </div>
                        <q-input outlined v-model="sex" label="Sex" dense required/>
                        <q-input outlined v-model="mobileNumber" label="Mobile Number" type="tel" dense />
                        <q-input outlined v-model="email" label="Email" dense required/>
                        <q-input outlined v-model="position" label="Position" dense required/>
                    </q-form>
                    <q-btn color="primary" label="Save" style="width: 20%; padding: 4px; margin-top: 30px; margin-left: 416px; box-sizing: border-box;" />
                </div>
          </div>
        </div>
      </div>

          <div class="q-pa-ms table-container" style="margin-top: 30px;">
            <q-table flat bordered :rows="rows" :columns="columns" :row-key="name" />
          </div>
        </div>
  </template>

<script>
import { ref, onMounted } from 'vue';

export default {
  setup() {
    const columns = [
      {
        name: 'position',
        required: true,
        label: 'Position',
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
        name: 'name',
        align: 'center',
        label: 'Name',
        field: 'captain',
        sortable: true,
        headerStyle: {
          background: '#1976D2',
          color: 'white'
        }
      },
      {
        name: 'sex',
        align: 'center',
        label: 'Sex',
        field: 'sex',
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
        name: 'email',
        label: 'E-mail',
        field: 'email',
        headerStyle: {
          background: '#1976D2',
          color: 'white'
        }
      },
      {
        name: 'action',
        label: 'Action',
        field: 'action',
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
  .custom-font {
    font-size: 1.35em; /* Adjust the size as needed */
  }

  .user-settings-form {
    width: 550px; /* Adjust the width as needed */
    /* Add any other styles to customize the form's appearance */
    padding: 15px;
    border-radius: 20px;
    margin-left: -30px;
  }

  .input-container {
    display: flex; /* Enable flexbox */

    align-items: center; /* Align vertically (optional) */
  }


  </style>

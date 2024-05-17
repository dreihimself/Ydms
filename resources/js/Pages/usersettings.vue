<template>
  <Head title="User Settings" />
  <div>

    <div>
      <!--tab here-->
      <Head title="User Settings" />
      <div class="q-pa-md" style="margin-left: -45px">
        <div class="q-gutter-y-md bg-primary" style="width: 15%; margin-left: 30px;">
          <q-tabs v-model="tab">
            <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
              <div class="text-white" style="width: 100%; text-align: left"> User Settings </div>
            </q-tab>
          </q-tabs>
        </div>
      </div>
      <q-separator color="black" style="margin-top: -17px; margin-left: 1px;" />
    </div>
    <div>
      <!--tab content here-->
      <div class="row">
        <div class="col">
          <!-- Input fields -->
          <div class="user-settings-form">
            <q-form @submit="saveSettings" class="q-gutter-md" style="margin-top: 85px;">
              <div class="input-container" style="display: flex; justify-content: space-around; align-items: center; gap: 15px;">
                <q-input outlined v-model="FirstName" label="First Name" dense required />
                <q-input outlined v-model="middleName" label="Middle Name" dense />
                <q-input outlined v-model="LastName" label="Last Name" dense required />
                <q-input outlined v-model="Suffix" label="Suffix" dense />
              </div>
              <q-input outlined v-model="username" label="Username" dense required />
              <q-select outlined v-model="selectedUserType" :options="userTypes" label="User Type" emit-value map-options dense />
              <q-select outlined v-model="selectedUserType" :options="userTypes" label="Barangay" emit-value map-options dense />
              <q-input outlined v-model="mobileNumber" label="Mobile Number" type="tel" dense />
              <q-input outlined v-model="password" label="Password" :type="isPwd ? 'password' : 'text'" dense>
                <template v-slot:append>
                  <q-icon :name="isPwd ? 'visibility_off' : 'visibility'" class="cursor-pointer" @click="isPwd = !isPwd" />
                </template>
              </q-input>
              <div class="text-right">
                <q-btn label="Save" type="submit" color="primary" />
              </div>
            </q-form>
          </div>
          <!-- Input fields -->
        </div>
        <div class="col-8">
          <q-input v-model="search" outlined type="search" label="Search" dense style="margin-top: 30px; width: 65%; padding-left: 16px; margin-left: 33%;" class="justify-end">
            <template v-slot:append>
              <q-icon name="search" />
            </template>
          </q-input>
          <div class="q-pa-md" >
            <q-table :rows="rows" :columns="columns "  row-key="name"  />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
  import { ref, onMounted} from 'vue';


 export default {
    setup() {
      const columns = [
        {
          name: 'name',
          required: true,
          label: 'Name',
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
          name: 'User Name',
          align: 'center',
          label: 'User Name',
          field: 'User Name',
          sortable: true,
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'User Type',
          align: 'center',
          label: 'User Type',
          field: 'User Type',
          sortable: true,
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'Barangay',
          align: 'center',
          label: 'Barangay',
          field: 'Barangay',
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
          name: 'Status',
          label: 'Status',
          field: 'Status',
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'Action',
          label: 'Action',
          field: 'Action',
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

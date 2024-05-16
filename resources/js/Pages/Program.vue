<template>
    <Head title="Activity" />
    <div>
        <div>
            <!--tab here-->

            <Head title="Activity" />
            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">


  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/DropdownSettings" :class="$page.component === 'DropdownSettings'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Activity </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/Program" :class="$page.component === 'program'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-white"> Program </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item  href="/civilstatus" :class="$page.component === 'civilstatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Civil Status </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
        <q-item  href="/EducBg" :class="$page.component === 'EducBg'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Educational<br>Background </q-item-section>

      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Youth<br>Classification</q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Work Status </q-item-section>
      </q-item>
    </q-tabs>
  </div>
</div>

      <q-separator color="black" style="margin-left: 1px;" />
    </div>

        </div>
        <div>
            <!--tab content here-->


            <div class="row">
        <div class="col">
          <!-- Input fields -->
          <div class="user-settings-form">
            <q-form @submit="saveSettings" class="q-gutter-md" style="margin-top: 85px;">
              <q-input outlined v-model="Acticity" label="Program" dense required />
              <q-input outlined v-model="Title" label="Title" dense required />
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

</template>


<script>
  import { ref, onMounted} from 'vue';


 export default {
    setup() {
      const columns = [
        {
          name: 'Program',
          required: true,
          label: 'Program',
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
          name: 'Title',
          align: 'center',
          label: 'Title',
          field: 'Title',
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

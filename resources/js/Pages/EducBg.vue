<template>
    <Head title="Civil Status" />
    <div>
        <div>
            <!--tab here-->


            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">


  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/DropdownSettings" :class="$page.component === 'DropdownSettings'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Activity </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/Program" :class="$page.component === 'program'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Program </q-item-section>
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
  <div class="q-pa-xm bg-primary" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-white"> Educational<br>Background </q-item-section>

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
        <div class="q-mx-xl q-px-xl">
            <!--tab content here-->
            <div class="q-mt-xl q-pr-md" style="display: flex; align-items: center; gap: 5px; justify-content: end;">
            <q-input outlined v-model="Addcivilstat" dense label="Add Option" style="width:25%"/>
            <q-btn label="+" color="primary" @click="addOption" />
        </div>

          <div class="q-pa-md" >
            <q-table :rows="rows" :columns="columns "  row-key="name"  />
          </div>






        </div>

</template>


<script>
  import { ref, onMounted} from 'vue';


 export default {
    setup() {
      const columns = [
        {
          name: 'Dropdown list',
          required: true,
          label: 'Dropdown list',
          align: 'left',
          field: row => row.name,
          format: val => `${val}`,

          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'Option',
          align: 'center',
          label: 'Option',
          field: 'Option',

          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },
        {
          name: 'Action',
          align: 'center',
          label: 'Action',
          field: 'Action',
          headerStyle: {
            background: '#1976D2',
            color: 'white'
          }
        },


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

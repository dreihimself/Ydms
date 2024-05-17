<template>
    <Head title="Youth Classification" />
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
              <q-item href="/civilstatus" :class="$page.component === 'CivilStatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
                <q-item-section class="text-black"> Civil Status </q-item-section>
              </q-item>
            </q-tabs>
          </div>
          <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/educationalbackground" :class="$page.component === 'educationalbackground'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Educational<br>Background </q-item-section>
      </q-item>
    </q-tabs>
  </div>
          <div class="q-pa-xm bg-primary" style="width: 17%;">
            <q-tabs v-model="tab">
              <q-item href="/YouthClassification" :class="$page.component === 'YouthClassification'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
                <q-item-section class="text-white"> Youth <br>Classification </q-item-section>
              </q-item>
            </q-tabs>
          </div>
          <div class="q-pa-xm bg-accent" style="width: 17%;">
            <q-tabs v-model="tab">
              <q-item  href="/workingstatus" :class="$page.component === 'WorkingStatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Working Status </q-item-section>
      </q-item>
            </q-tabs>
          </div>
        </div>
        <q-separator color="black" style="margin-left: 1px;" />
      </div>
    </div>
    <div>

    </div>
            <!-- tab here -->
        <div>
            <!--tab content here-->
            <div class="row">
      <div class="col">
        <div class="q-mt-xl q-pr-md" style="display: flex; align-items: center; gap: 5px; justify-content: end;">
            <q-input outlined v-model="AddYouthClass" dense label="Add Option" style="width:25%"/>
            <q-btn label="+" color="primary" @click="addOption" />
        </div>
          <div class="q-pa-md" >
            <q-table :rows="rows" :columns="columns "  row-key="name"  />
          </div>
      </div>
      <div class="col">
  <div class="q-mt-xl q-pr-md" style="display: flex; align-items: center; gap: 5px;">
    <q-item style="justify-self: left;">Youth With Special Needs</q-item>
            <q-input outlined v-model="Addcivilstat" dense label="Add Option" style="width:100%;"/>
            <q-btn label="+" color="primary" @click="addOption" />


</div>
          <div class="q-pa-md br-primary">
            <q-table :rows="row" :columns="modifiedColumns "  row-key="name"  />
          </div>
      </div>
    </div>
            <!--tab content here-->
        </div>

</template>

<script>
import { ref, onMounted } from 'vue';

export default {
  setup() {
    // Data for the tables (replace with your actual data or API fetch)
    const rows = ref([]);
    const row = ref([]);
    const newOption = ref(''); // For adding new options

    // Column definitions for the first table
    const columns = [
    { name: 'DropDown Title', label: 'Dropdown Title', field: 'Dropdown Title', sortable: true, align: 'left', headerStyle: { background: '#1976D2', color: 'white' } },
      { name: 'Status', label: 'Status', field: 'Status', sortable: true, align: 'center', headerStyle: { background: '#1976D2', color: 'white' } },
      { name: 'Action', label: 'Action', field: 'Action', sortable: true, align: 'center', headerStyle: { background: '#1976D2', color: 'white' } },
    ];

    // Modified column definitions for the second table
    const modifiedColumns = [
      { name: 'DropDown Title', label: 'Dropdown Title', field: 'Dropdown Title', sortable: true, align: 'left', headerStyle: { background: '#1976D2', color: 'white' } },
      { name: 'Status', label: 'Status', field: 'Status', sortable: true, align: 'center', headerStyle: { background: '#1976D2', color: 'white' } },
      { name: 'Action', label: 'Action', field: 'Action', sortable: true, align: 'center', headerStyle: { background: '#1976D2', color: 'white' } },
      // ... modify other column labels and names as needed
    ];

    // Function to fetch data (replace with your API call)
    const fetchData = async () => {
      // ... your fetch logic ...
    };

    // Function to add new option
    const addOption = () => {
      if (newOption.value) {
        // ... your logic to add the new option to the data/backend ...
        newOption.value = ''; // Clear the input field
      }
    };

    onMounted(fetchData); // Fetch data when the component is mounted

    return {
      columns,
      rows,
      row, // Add this line
      modifiedColumns,
      newOption,
      addOption
    };
  }
};
</script>

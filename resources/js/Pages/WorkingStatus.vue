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
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/program" :class="$page.component === 'program'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
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
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
        <q-item  href="/educationalbackground" :class="$page.component === 'EducBg'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Educational<br>Background </q-item-section>

      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
        <q-item href="/youthclassification" :class="$page.component === 'YouthClassification'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
                <q-item-section class="text-black"> Youth <br>Classification </q-item-section>
              </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 17%;">
    <q-tabs v-model="tab">
        <q-item  href="/workstatus" :class="$page.component === 'workstatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-white"> Working Status </q-item-section>
      </q-item>
    </q-tabs>
  </div>
</div>

      <q-separator color="black" style="margin-left: 1px;" />
    </div>

        </div>
        <div>
            <!--tab content here-->
 <!-- Input -->
 <div class="row justify-center q-gutter-md" style="margin-top: 10.5px; padding-left: 199px;">
  <div class="input-container" style="width: 600px;">
    <q-input dense outlined required v-model="name" label="Enter new list" style="width: 100%; padding: 10px; padding-top: 1px; padding-bottom: 1px; box-sizing: border-box;" />
    <!-- Quasar Button as Enter Button -->
    <q-btn color="accent" text-color="black" @click="submitInput">Add</q-btn>
  </div>
</div>

    <!-- Table -->
    <div class="row justify-center q-gutter-md" style="margin-top: -3px;">
      <div class="q-pa-ms table-container">
        <q-table
          flat
          bordered
          :rows="rows"
          :columns="columns"
          :row-key="name"
          :style="{ width: '800px' }"
          fit
        />
      </div>
    </div>
        </div>

</template>

<script>
const columns = [
  { name: 'droplist',  label: 'Dropdown List', field: 'droplist', align:'left' ,headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'optStat', label: 'Option Status', field: 'optStat',align:'center',headerStyle: { background: '#1976D2', color: 'white' } },
  { name: 'action', label: 'Action', field: 'action' ,align:'center',headerStyle: { background: '#1976D2', color: 'white' }},
]
const rows = [
  { droplist: 'Employed', optStat: 'Enabled', action: 'Edit   Disabled' },
  { droplist: 'Unemployed', optStat: 'Enabled', action: 'Edit   Disabled' },
  { droplist: 'Self-employed', optStat: 'Enabled', action: 'Edit   Disabled' },
  { droplist: 'Currently looking for a job', optStat: 'Enabled', action: 'Edit   Disabled' },
  { droplist: 'Not Interested to look for a job', optStat: 'Enabled', action: 'Edit   Disabled' },
]
export default {
  data() {
    return {
      tab: 'mails', // Assuming you have defined this data property
      name: '', // Assuming you are using v-model for input value
      columns,
      rows
    };
  },
  methods: {
    submitInput() {
      // Add your logic here to handle the submission of the input
    }
  }
}
</script>

<style>
.row.justify-center {
  display: flex;
  justify-content: center;
}

.input-container {
  display: flex;
  align-items: center;
}
.input-container q-btn {
  margin-left: 10px;
}
</style>


<template>
  <Head title="User Settings" />

  <div class="q-pa-md" style="margin-left: -45px">
      
      <div class="q-gutter-y-md bg-blue" style="width: 370px; margin-left: 30px;">
<q-tabs v-model="tab">
<q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
  <div class="text-white" style="width: 100%; text-align: left">
    Barangay Registry
  </div>
</q-tab>
</q-tabs>
</div>
  </div>
  <q-separator color="black" style="margin-top: -17px; margin-left: 1px;"/>
         

        
  <div class="row">
      <div class="col-6">
        <div class="q-pa-md row"> <div class="col-4">
          <div class="user-settings-form"> <q-form @submit="saveSettings" class="q-gutter-md">
              <q-input outlined v-model="name" label="Name" />
              <q-input outlined v-model="username" label="Username" />
              <q-select
                    outlined
                    v-model="selectedUserType"
                    :options="userTypes"
                    label="User Type"
                    emit-value
                    map-options
                  />
                  <q-select
                    outlined
                    v-model="selectedUserType"
                    :options="userTypes"
                    label="Barangay"
                    emit-value
                    map-options
                  />
              <q-input outlined v-model="mobileNumber" label="Mobile Number" type="tel" />
              <q-input
    outlined
    v-model="password"
    label="Password"
    :type="isPwd ? 'password' : 'text'"
  >
    <template v-slot:append>
      <q-icon
        :name="isPwd ? 'visibility_off' : 'visibility'"
        class="cursor-pointer"
        @click="isPwd = !isPwd"
      />
    </template>
  </q-input>
  
              <div class="text-right"> 
                  <q-btn label="Save" type="submit" color="primary" />
                </div>
            </q-form>
          </div>
        </div>
      </div>


      </div>
      <div class="col-6">
        <div class="q-pa-ms" style="width:650px; height: 500px; position: absolute; top: 600; right: 10; margin-top: 30px;">
    <q-table
      flat bordered
      :rows="rows"
      :columns="columns"
      row-key="name"
    />
  </div>

      </div>
    </div>
</template>

<script>
 const columns = [
   {
     name: 'name',
     required: true,
     label: 'Dessert (100g serving)',
     align: 'left',
     field: row => row.name,
     format: val => `${val}`,
     sortable: true
   },
   { name: 'calories', align: 'center', label: 'Calories', field: 'calories', sortable: true },
   { name: 'fat', label: 'Fat (g)', field: 'fat', sortable: true },
   { name: 'carbs', label: 'Carbs (g)', field: 'carbs' },
   { name: 'protein', label: 'Protein (g)', field: 'protein' },
   { name: 'sodium', label: 'Sodium (mg)', field: 'sodium' },
   { name: 'calcium', label: 'Calcium (%)', field: 'calcium', sortable: true, sort: (a, b) => parseInt(a, 10) - parseInt(b, 10) },
   { name: 'iron', label: 'Iron (%)', field: 'iron', sortable: true, sort: (a, b) => parseInt(a, 10) - parseInt(b, 10) }
 ]
 
 const rows = [
   {
     name: 'Frozen Yogurt',
     calories: 159,
     fat: 6.0,
     carbs: 24,
     protein: 4.0,
     sodium: 87,
     calcium: '14%',
     iron: '1%'
   },
   {
     name: 'Ice cream sandwich',
     calories: 237,
     fat: 9.0,
     carbs: 37,
     protein: 4.3,
     sodium: 129,
     calcium: '8%',
     iron: '1%'
   },
   {
     name: 'Eclair',
     calories: 262,
     fat: 16.0,
     carbs: 23,
     protein: 6.0,
     sodium: 337,
     calcium: '6%',
     iron: '7%'
   },
   {
     name: 'Cupcake',
     calories: 305,
     fat: 3.7,
     carbs: 67,
     protein: 4.3,
     sodium: 413,
     calcium: '3%',
     iron: '8%'
   },
   {
     name: 'Gingerbread',
     calories: 356,
     fat: 16.0,
     carbs: 49,
     protein: 3.9,
     sodium: 327,
     calcium: '7%',
     iron: '16%'
   },
   {
     name: 'Jelly bean',
     calories: 375,
     fat: 0.0,
     carbs: 94,
     protein: 0.0,
     sodium: 50,
     calcium: '0%',
     iron: '0%'
   },
   {
     name: 'Lollipop',
     calories: 392,
     fat: 0.2,
     carbs: 98,
     protein: 0,
     sodium: 38,
     calcium: '0%',
     iron: '2%'
   },
   {
     name: 'Honeycomb',
     calories: 408,
     fat: 3.2,
     carbs: 87,
     protein: 6.5,
     sodium: 562,
     calcium: '0%',
     iron: '45%'
   },
   {
     name: 'Donut',
     calories: 452,
     fat: 25.0,
     carbs: 51,
     protein: 4.9,
     sodium: 326,
     calcium: '2%',
     iron: '22%'
   },
   {
     name: 'KitKat',
     calories: 518,
     fat: 26.0,
     carbs: 65,
     protein: 7,
     sodium: 54,
     calcium: '12%',
     iron: '6%'
   }
 ]
 
 export default {
   setup () {
     return {
       columns,
       rows
     }
   }
 }
 </script>

<style>
.custom-font {
font-size: 1.35em; /* Adjust the size as needed */
}

.user-settings-form {
width: 500px; /* Adjust the width as needed */
/* Add any other styles to customize the form's appearance */
padding: 15px;
border-radius: 5px;
}
</style>
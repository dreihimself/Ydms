<template>
    <Head title="Department Head" />
        <div>
            <div>
                <!--tab here-->

                    <div class="q-pa-md" style="margin-left: -45px;">

                        <div class="q-gutter-y-md bg-primary" style="width: 15%; margin-left: 39px;">
                            <q-tabs v-model="tab">
                                <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
                                    <div class="text-white text-bold" style="width: 100%; text-align: left">
                                        Department Head
                                    </div>
                                </q-tab>
                            </q-tabs>
                        </div>
                    </div>
                        <q-separator color="black" style="margin-top: -17px; margin-left: 10px;"/>
                        </div>
                            <div style="padding: 20px;">
                                <!--tab content here-->
                                <div class="row">
                                    <div class="col">
                                        <div class="">
                                            <q-form @submit="saveSettings" class="q-gutter-md"  style="width:100%">
                                                <q-input outlined v-model="name" dense label="Name" disable/>
                                                    <div class="input-container">
                                                        <q-input v-model="date" outlined dense type="date" label="Birth Date" class="q-py-none" disable style="width:100%"/>
                                                        <q-input outlined v-model="Age" label="Age" dense disable style="width:100%"/>
                                                    </div>
                                                <q-input outlined v-model="sex" dense label="Sex" disable/>
                                                <q-input outlined v-model="Barangay" dense label="Barangay" disable/>
                                                <q-input dense outlined v-model="mobileNumber" label="Mobile Number" type="tel" disable />
                                                <q-input dense outlined v-model="email" label="Email" type="email" disable />
                                                <q-input dense outlined v-model="email" label="Position" type="position" disable />

                                                <div class="text-right">
                                                    <q-btn label="Save" type="submit" color="primary" />
                                                </div>
                                            </q-form>
                                        </div>
                                    </div>
                                        <div class="col-8">
                                            <div>
                                                <q-table flat bordered :rows="rows" :columns="columns" style="max-height: 100%; overflow-y: auto;"/>
                                            </div>
                                        </div>
                    </div>
            </div>
        </div>
</template>

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
  justify-content: space-around; /* Distribute inputs evenly */
  align-items: center; /* Align vertically (optional) */
  gap: 5px; /* Add spacing between inputs */
}


</style>

<script>
const columns = [

  { name: 'Position',  label: 'Position', field: 'Position', align:'left' ,headerStyle: {
            background: '#1976D2',
            color: 'white'
          }},
  { name: 'name', label: 'name', field: 'name',headerStyle: {
            background: '#1976D2',
            color: 'white'
          } },
  { name: 'Sex', label: 'Sex', field: 'Sex' ,headerStyle: {
            background: '#1976D2',
            color: 'white'
          }},
  { name: 'mobile', label: 'mobile number', field: 'mobile',headerStyle: {
            background: '#1976D2',
            color: 'white'
          } },
  { name: 'email', label: 'email ', field: 'email' , align:'center',headerStyle: {
            background: '#1976D2',
            color: 'white'
          }},
  { name: 'action', label: 'action ', field: 'action' ,headerStyle: {
            background: '#1976D2',
            color: 'white'
          }},

]
const rows = [
  {
    Position: 'SK Chairman',
    name: 'Rita',
    Sex: 'Female',
    mobile: '09184579878',
    email: 'sample_mail@yahoo.com',
    action: 'Edit'
  },
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

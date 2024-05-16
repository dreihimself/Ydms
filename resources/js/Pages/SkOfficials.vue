<template>
    <Head title="SK Officials Registry" />
    <div>
        <div>
            <!--tab here-->
            <div class="q-pa-md" style="margin-left: -45px">

      <div class="q-gutter-y-md bg-blue" style="width: 370px; margin-left: 30px;">
<q-tabs v-model="tab">
<q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
  <div class="text-white text-bold" style="width: 100%; text-align: left">
    SK Officials Registry
  </div>
</q-tab>
</q-tabs>
</div>
  </div>
  <q-separator color="black" style="margin-top: -17px; margin-left: 10px;"/>

        </div>
        <div>
            <!--tab content here-->
            <div class="row">
            <div class="col">
                <q-input dense v-model="search" filled type="search" label="Search" class="q-my-xl"  style="width:63%;">
                    <template v-slot:append>
                    <q-icon name="search" />
                    </template>
               </q-input>

               <div class="user-settings-form"> <q-form @submit="saveSettings" class="q-gutter-md"  style="width:65%">
              <q-input outlined v-model="name" dense label="Name" />
              <q-input outlined v-model="username" dense label="Username" />
              <q-select
                    outlined
                    v-model="selectedUserType"
                    :options="userTypes"
                    label="User Type"
                    emit-value
                    map-options
                    dense
                  />
                  <q-select
                    outlined
                    v-model="selectedUserType"
                    :options="userTypes"
                    label="Barangay"
                    emit-value
                    map-options
                    dense
                  />
              <q-input dense outlined v-model="mobileNumber" label="Mobile Number" type="tel" />
              <q-input dense
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
            <div class="col">
                .col
            </div>
            </div>

        </div>
    </div>
</template>

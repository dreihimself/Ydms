<template>
    <Head title="Dropdown Settings" />
    <div>
        <div>
            <!--tab here-->

            <Head title="User Settings" />
            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">
  <div class="q-pa-xm bg-primary" style="width: 13%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none" :class="$page.component === 'Activity'">
        <div class="text-white"> Dropdown </div>
        <div class="text-white"> Settings </div>
      </q-tab>
    </q-tabs>
  </div>

  <div class="q-pa-xm bg-primary" style="width: 12%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
        <div class="text-white"> Activity </div>
      </q-tab>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
        <div class="text-white"> Program </div>
      </q-tab>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
        <div class="text-white"> Civil Status </div>
      </q-tab>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
        <div class="text-white"> Educational </div>
        <div class="text-white"> Background </div>
      </q-tab>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
        <div class="text-white"> Youth </div>
        <div class="text-white"> Classification </div>
      </q-tab>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
        <div class="text-white"> Work Status </div>
      </q-tab>
    </q-tabs>
  </div>
</div>

      <q-separator color="black" style="margin-left: 1px;" />
    </div>

        </div>
        <div>
            <!--tab content here-->
        </div>

</template>
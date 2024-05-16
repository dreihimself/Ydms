<template>
    <Head title="Dropdown Settings" />
    <div>
        <div>
            <!--tab here-->

            <Head title="User Settings" />
            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">
  <div class="q-pa-xm bg-dark" style="width: 13%;">
    <q-tabs v-model="tab">
      <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none" :class="$page.component === 'Activity'">
        <div class="text-white"> Dropdown<br>Settings </div>
      </q-tab>
    </q-tabs>
  </div>

  <div class="q-pa-xm bg-accent" style="width: 12%;">
    <q-tabs v-model="tab">
      <q-item href="/civilstatus" :class="$page.component === 'civilstatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Activity </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Program </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-item  href="/civilstatus" :class="$page.component === 'civilstatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Civil Status </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Educational<br>Background </q-item-section>

      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 15%;">
    <q-tabs v-model="tab">
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Youth<br>Classification</q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 15%;">
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
        </div>

</template>

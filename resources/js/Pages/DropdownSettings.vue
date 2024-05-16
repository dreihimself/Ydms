<template>
    <Head title="Activity" />
    <div>
        <div>
            <!--tab here-->

            <Head title="Activity" />
            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">


  <div class="q-pa-xm bg-primary" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/civilstatus" :class="$page.component === 'civilstatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-white"> Activity </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
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
      <q-item name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
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
        </div>

</template>

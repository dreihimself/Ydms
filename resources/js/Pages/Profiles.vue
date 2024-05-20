<template>
    <Head title="Profiles" />
    <div>
        <div>
            <!--tab here-->
            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">
        <div class="q-pa-xm bg-primary" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/profiles" :class="$page.component === 'profiles'" name="profiles" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-white">KK Profile </q-item-section>
            </q-item>
          </q-tabs>
        </div>
        <div class="q-pa-xm bg-accent" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/" :class="$page.component === ''" name="profilelist" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-black"> KK Profile list </q-item-section>
            </q-item>
          </q-tabs>
        </div>

      </div>
      <q-separator color="black" style="margin-left: 1px;" />
    </div>

        <div>
            <!--tab content here-->
            <div class="row">
      <div class="col">
        .col
      </div>
      <div class="col">
        .col
      </div>
    </div>
        </div>
    </div>
</template>

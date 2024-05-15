<template>
    <div class="q-ma-none flex flex-center bg-grey-5" style="height: 100vh;">
      <div class="form-container">
        <q-card class="q-pa-none q-ma-none br-xs bg-white overflow-hidden">
          <div class="q-pa-none">
            <q-card>
              <q-card-section class="imgtitle bg-dark" style="border-radius: 0px;">
                <div>
                  <q-avatar style="width: 64px; height: 64px; padding-left: 20px;">
                    <!-- Adjust width and height as needed -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Sangguniang_Kabataan_logo.svg" style="width: 100%; height: 100%; object-fit: contain;">
                  </q-avatar>
                </div>
                <div>
                  <div class="text-h6 text-white" style="text-align: center; font-size: 19px; padding-right: 20px;">YOUTH DEVELOPMENT MANAGEMENT SYSTEM</div>
                </div>
              </q-card-section>
            </q-card>
          </div>

          <q-form @submit="onSubmit" @reset="onReset" class="q-pa-xl q-ma-md">
            <q-input
              dense
              filled
              v-model="name"
              label="Username *"
              lazy-rules
              :rules="[val => val && val.length > 0 || 'Please type something']"
              class="q-mb-md"
            />
            <q-input
              dense
              filled
              type="password"
              v-model="pass"
              label="Password *"
              lazy-rules
              :rules="[
                val => val !== null && val !== '' || 'Please type your password',
                val => val.length > 0 && val.length < 100 || 'Please type your real password'
              ]"
              class="q-mb-lg"
            />
            <div class="flex flex-center q-mt-md">
              <q-btn  label="Sign-in" type="submit" color="dark" class="q-mt-md"/>
            </div>
          </q-form>

          <div class="footer" @click="forgotPassword">
            <q-card-section class="footer-content bg-dark text-white" style="padding-top: 8px; padding-bottom: 10px;">
              <div style="text-align: center;">Forgot Password?</div>
            </q-card-section>
          </div>
        </q-card>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        name: '',
        pass: ''
      };
    },
    methods: {
      async onSubmit() {
        // Handle form submission
        try {
          const response = await this.$axios.post('/login', {
            name: this.name,
            pass: this.pass
          });
          // Handle the response
        } catch (error) {
          console.error('Login failed', error);
        }
      },
      onReset() {
        // Handle form reset
        this.name = '';
        this.pass = '';
      },
      forgotPassword() {
        // Handle forgot password action here
        console.log("Forgot password clicked");
        // You can add your logic here, such as showing a modal or navigating to a forgot password page.
      }
    }
  };
  </script>

  <style>
  .form-container {
    max-width: 400px; /* Set maximum width for the form container */
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .imgtitle {
    display: flex;
    grid-template-columns: 0.6fr 1.4fr;
  }

  .q-input {
    margin-bottom: 10px; /* Adjust the value as needed */
  }

  .footer {
    margin-top: auto;
    font-size: 12px;
    cursor: pointer; /* Add cursor pointer to indicate clickable */
  }

  .footer-content {
    color: var(--q-color-primary); /* Assuming primary color is used for the header */
  }
  </style>

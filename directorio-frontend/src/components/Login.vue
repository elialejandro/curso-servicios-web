<template>
  <v-container>
    <v-layout justify-center>
      <v-flex md6 lg4>
        <v-card>
          <v-card-title>
            Login
          </v-card-title>
          <v-card-text>
            <v-text-field
              v-model="username"
              label="Correo"
              outlined
            ></v-text-field>
            <v-text-field
              v-model="password"
              label="Contraseña"
              outlined
            ></v-text-field>
          </v-card-text>
          <v-card-actions>
            <v-btn color="primary"
              rounded
              block
              @click="login()">
              Entrar
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import axios from 'axios';

export default {
  data: () => ({
    username: '',
    password: '',
    errorMessage: ''
  }),
  methods: {
    login () {
      console.log(this.username);
      console.log(this.password);

      axios.post('http://localhost:8000/oauth/token', {
        'client_id': 2,
        'client_secret': 'LTmgzn5h0fMudd6OUxQQHBllqApUXT7ixvlO4iMj',
        'grant_type': 'password',
        'username': this.username,
        'password': this.password,
        'scope': '*'
      })
      .then( function (response) {
        console.log(response.data);
        localStorage.setItem('token', data.access_token);
        localStorage.setItem('refresh_token', data.refresh_token);
      })
      .catch( function (response) {
        this.errorMessage = 'La constraseña o el usuario son incorrectos.';
      });

    }
  }
}
</script>

<style>

</style>
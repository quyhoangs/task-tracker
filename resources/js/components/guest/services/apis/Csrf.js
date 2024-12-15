// Csrf.js
import axios from 'axios';

export function getCsrfToken() {
  return axios.get('/sanctum/csrf-cookie');
}

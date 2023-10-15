import { loginAuth } from "./login.js";

new Glide('.glide', {
  type: 'carousel',
  startAt: 0,
  perView: 4.2
}).mount();

loginAuth();
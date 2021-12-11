const burger = document.querySelector('.header__burger');
const menu = document.querySelector('.header__menu');
// burger.onclick = (e) => {
//   document.querySelector('.header__burger').classList.toggle('active');
//   document.querySelector('.header__menu').classList.toggle('active');
//   console.log(e)
//   console.log(document.querySelector('.header__burger'))
// //   console.log(document.querySelector('.header__menu'))
// }

addEventListener('click', (ev => {
  if (ev.target.closest('.header__burger'))  {
    console.log(ev.target);
    burger.classList.toggle('active');
    menu.classList.toggle('active');
    document.body.classList.toggle('lock');
  }
}))
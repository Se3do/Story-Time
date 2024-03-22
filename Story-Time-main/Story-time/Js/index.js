const l1 = document.getElementById('l1')
const l2 = document.getElementById('l2')
const l3 = document.getElementById('l3')
const l4 = document.getElementById('l4')
const l5 = document.getElementById('l5')
const l6 = document.getElementById('l6')

const r1 = document.getElementById('r1')
const r2 = document.getElementById('r2')
const r3 = document.getElementById('r3')
const r4 = document.getElementById('r4')
const r5 = document.getElementById('r5')
const r6 = document.getElementById('r6')

const section1 = document.getElementById('section1')
const section2 = document.getElementById('section2')
const section3 = document.getElementById('section3')
const section4 = document.getElementById('section4')
const section5 = document.getElementById('section5')
const section6 = document.getElementById('section6')

l1.onclick = () => {
  section1.scrollLeft -= document.getElementsByClassName('book')[0].clientWidth + 40
}
r1.onclick = () => {
  section1.scrollLeft += document.getElementsByClassName('book')[0].clientWidth + 40
}
l2.onclick = () => {
  section2.scrollLeft -= document.getElementsByClassName('book')[0].clientWidth + 40
}
r2.onclick = () => {
  section2.scrollLeft += document.getElementsByClassName('book')[0].clientWidth + 40
}
l3.onclick = () => {
  section3.scrollLeft -= document.getElementsByClassName('book')[0].clientWidth + 40
}
r3.onclick = () => {
  section3.scrollLeft += document.getElementsByClassName('book')[0].clientWidth + 40
}
l4.onclick = () => {
  section4.scrollLeft -= document.getElementsByClassName('book')[0].clientWidth + 40
}
r4.onclick = () => {
  section4.scrollLeft += document.getElementsByClassName('book')[0].clientWidth + 40
}
l5.onclick = () => {
  section5.scrollLeft -= document.getElementsByClassName('book')[0].clientWidth + 40
}
r5.onclick = () => {
  section5.scrollLeft += document.getElementsByClassName('book')[0].clientWidth + 40
}
l6.onclick = () => {
  section6.scrollLeft -= document.getElementsByClassName('book')[0].clientWidth + 40
}
r6.onclick = () => {
  section6.scrollLeft += document.getElementsByClassName('book')[0].clientWidth + 40
}

document.querySelectorAll('a[href^="#"]').forEach($anchor => {
  $anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth',
          block: 'start' //scroll to top of the target element
      });
  });
});
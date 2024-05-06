const navlinks = document.querySelector('.nav-links');
const menuBtn = document.querySelector('ion-icon[name="menu-outline"]');

function onToggleMenu() {
  navlinks.classList.toggle('top-[8.71%]');
  navlinks.classList.toggle('hidden');
  const currentName = menuBtn.getAttribute('name');
  menuBtn.setAttribute('name', currentName === 'menu-outline' ? 'close-outline' : 'menu-outline');
}

menuBtn.addEventListener('click', onToggleMenu);


let count = 0;
const targetCount = 1000;
const speed = 600; // Adjust the speed of the counting animation

function countUp() {
  if (count < targetCount) {
    count += Math.ceil(targetCount / speed);
    document.getElementById('count').textContent = count;
    setTimeout(countUp, 1);
  } else {
    document.getElementById('count').textContent = targetCount;
  }
}

countUp();

// get dATES
function displayCurrentDate() {
    const currentDateElement = document.getElementById('currentDate');
    const options = { month: 'short', day: '2-digit', year: 'numeric' };
    const currentDate = new Date().toLocaleDateString('en-US', options);
    currentDateElement.textContent = currentDate;
  }

  

const navlinks = document.querySelector('.nav-links');
const menuBtn = document.querySelector('.ion-icon[name="close-outline"]');

// function onToggleMenu(e) {
  
//   navlinks.classList.toggle('top-[10%]');
//   navlinks.classList.toggle('hidden');
//   const currentName = menuBtn.getAttribute('name');
//   menuBtn.setAttribute('name', currentName === 'menu-outline' ? 'close-outline' : 'menu-outline');
// }

// menuBtn.addEventListener('click', onToggleMenu);
const nav= document.getElementById("navlinks")

function displayNavlinks(){
  nav.classList.toggle("invisible")

}
displayNavlinks();


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

  function sendWhatsApp() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('Email').value;
    const message = document.getElementById('textarea').value;
  
    // Encode special characters for URL safety
    const encodedName = encodeURIComponent(name);
    const encodedEmail = encodeURIComponent(email);
    const encodedMessage = encodeURIComponent(message);
  
    // Build the WhatsApp URL with form data
    const whatsappUrl = `https://wa.me/?text=${encodedName}%0A%0AEmail: ${encodedEmail}%0A%0AMessage: ${encodedMessage}`;
  
    // Open the URL in a new tab
    window.open(whatsappUrl, '_blank');
  }
  
  // Attach the function to the form submit event
  const form = document.querySelector('form');
  form.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent default form submission
    sendWhatsApp();
  });

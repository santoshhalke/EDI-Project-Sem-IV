const menuOpen = document.getElementById('menu-open');
const menuClose = document.getElementById('menu-close');
const sideBar = document.querySelector('.container .left-section');
const sidebarItems = document.querySelectorAll('.container .left-section .sidebar .item');

menuOpen.addEventListener('click', () => {
    sideBar.style.top = '0';
});

menuClose.addEventListener('click', () => {
    sideBar.style.top = '-60vh';
});

let activeItem = sidebarItems[0];

sidebarItems.forEach(element => {
    element.addEventListener('click', () => {
        if (activeItem) {
            activeItem.removeAttribute('id');
        }

        element.setAttribute('id', 'active');
        activeItem = element;

    });
});

function showContent(option) {
    // Hide all content divs
    document.querySelectorAll('.content').forEach(div => {
        console.log(div);
        div.classList.add('hidden');
        
    });

    // Show the selected content div
    document.getElementById(option + 'Content').classList.remove('hidden');
    document.getElementById(option + 'Content').classList.add('content');
}

function showDefaultContent() {
    // Hide all content divs
    document.querySelectorAll('.content').forEach(div => {
        div.classList.add('hidden');
        div.classList.remove('content');
    });

    // Show the default content div
    document.getElementById('defaultContent').classList.remove('hidden');
    document.getElementById('defaultContent1').classList.remove('hidden');
  }


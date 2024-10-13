//Navigation
let sections = document.querySelectorAll("section");
let navlinks = document.querySelectorAll("header nav ul li a");

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop -150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute("id");

        if(top >= offset && top < offset + height) {
            navlinks.forEach(link => {
                link.classList.remove("active");

            });
            document.querySelector(`header nav ul li a[href='#${id}']`).classList.add("active")
        }
    })
}

//Accordions

const lines = document.querySelectorAll('.line');

lines.forEach(line => {
    line.addEventListener('click',  () => {
        const body = line.querySelector('.cordeon-body');
        body.classList.toggle('active');

        const header = line.querySelector('.cordeon-header');
        header.classList.toggle('active')
    })
})

//slider-Home
const preview = document.getElementById("preview");
const next = document.getElementById("next");

preview.addEventListener("click", previewSlider);
next.addEventListener("click", nextSlider);

function previewSlider() {
    const element = document.getElementById('slide-01');
    
    element.scrollIntoView({
        behavior: 'smooth',
        inline: 'nearest',
        block: 'nearest'
        
    });
}

function nextSlider() {
    const element = document.getElementById('slide-05');
    element.scrollIntoView({
        behavior: 'smooth',
        inline: 'nearest',
        block: 'nearest'
        
    });
}

//slider-Afiliados

function prevSlider() {
    const element = document.getElementById('slide-1');
    
    element.scrollIntoView({
        behavior: 'smooth',
        inline: 'nearest',
        block: 'nearest'
        
    });
}

function nextrSlider() {
    const element = document.getElementById('slide-5');
    element.scrollIntoView({
        behavior: 'smooth',
        inline: 'nearest',
        block: 'nearest'
        
    });
}

//slider-ind
function prevSliderInd() {
    const element = document.getElementById('slide-001');
    
    element.scrollIntoView({
        behavior: 'smooth',
        inline: 'nearest',
        block: 'nearest'
        
    });
}

function nextSliderInd() {
    const element = document.getElementById('slide-003');
    element.scrollIntoView({
        behavior: 'smooth',
        inline: 'nearest',
        block: 'nearest'
        
    });
}


//Video Player
const player = cloudinary.videoPlayer('player', {
    cloudName: 'dfjajuiwn',
    showLogo: false
  });
  
  player.source('Curso_Full_Stack_Turbo_por_DENTRO_-_Saiba_todos_os_detalhes_eqhmvv', {
    poster: 'https://res.cloudinary.com/dfjajuiwn/image/upload/image-bg-hero-01-_1__u65fm9.jpg',
    info: {
      title: 'Full Stack Turbo por dentro',
      subtitle: 'Entenda com ofunciona o curso Full Stack Turbo por dentro'
    }
  });
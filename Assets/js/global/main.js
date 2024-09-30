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

//slider

function next() {
    const slider = document.getElementsByClassName("slider");
    slider.scrollIntoView({
        behavior: 'smooth',
        inline: 'end'
    })
}
$(document).ready(function() {
    $('#mobile_btn').on('click', function () {
        $('#mobile_menu').toggleClass('active');
        $('#mobile_btn').find('i').toggleClass('fa-x fa-bars');
    });

    $(window).scroll(function() {
        const header = $('header');
        const section = $('section');
        const navItems = $('.nav-item');

        const scrollPosition = $(window).scrollTop() - header.outerHeight();

        if (scrollPosition <= 0) {
            header.css('box-shadow', 'none');
        } else {
            header.css('box-shadow', '5px 1px 5px rgba(0, 0, 0, 0.1)');
        }

        let activeSectionIndex = 0;
        section.each(function(i) {
            const sectionTop = section.eq(i).offset().top;
            const sectionBottom = sectionTop + section.eq(i).outerHeight();

            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                activeSectionIndex = i;
                return false;
            }
        });

        navItems.removeClass('active');
        $(navItems[activeSectionIndex]).addClass('active');
    });

    ScrollReveal().reveal('#cta', {
        origin: 'left',
        duration: 2000,
        distance: '20%'
    })
    ScrollReveal().reveal('.container-pai', {
        origin: 'left',
        duration: 2000,
        distance: '20%'
    })
    ScrollReveal().reveal('#critick_content', {
        origin: 'left',
        duration: 2000,
        distance: '20%'
    })
    
});

//os ScrollReveal a cima foi para dar uma leve estilizada nos elementos da pagina.


// JavaScript para enviar o formulário e salvar as críticas (implementar)

// Exemplo básico de como enviar os dados para um servidor:
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    // Enviar os dados para um servidor usando fetch ou XMLHttpRequest
});
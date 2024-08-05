// Definindo a função toggleDisplay para abrir todos os cards
async function toggleDisplay() {
    try {
        var carousels = document.querySelectorAll('.secondCarousel');

        carousels.forEach(carousel => {
            if (carousel.style.display === 'none' || carousel.style.display === '') {
                carousel.style.display = 'block';
            } else {
                carousel.style.display = 'none';
            }
        });
    } catch (error) {
        console.error('Erro na função toggleDisplay:', error);
    }
}

// Função para alternar a exibição dos cartões de blog
async function toggleCardBlog() {
    try {
        var carousels = document.querySelectorAll('.second-card-blog');

        carousels.forEach(carousel => {
            if (carousel.style.display === 'none' || carousel.style.display === '') {
                carousel.style.display = 'flex';
            } else {
                carousel.style.display = 'none';
            }
        });
    } catch (error) {
        console.error('Erro na função toggleCardBlog:', error);
    }
}

// ESTILIZAÇÃO DO HEADER QUANDO A JANELA ROLA
async function handleScroll() {
    try {
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            const logo = document.getElementById('logoPrincipal');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
                logo.src = './src/img/logo-color.png';
            } else {
                header.classList.remove('scrolled');
                logo.src = './src/img/incorporadora-horizontal.png';
            }
        });
    } catch (error) {
        console.error('Erro na função handleScroll:', error);
    }
}

// ROLAGEM CARROSSEL
async function setupCarouselScroll() {
    try {
        const carousel = document.querySelector('.carousel-inner');
        let isDown = false;
        let startX;
        let scrollLeft;

        carousel.addEventListener('mousedown', (e) => {
            isDown = true;
            carousel.classList.add('active');
            startX = e.pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });

        carousel.addEventListener('mouseleave', () => {
            isDown = false;
            carousel.classList.remove('active');
        });

        carousel.addEventListener('mouseup', () => {
            isDown = false;
            carousel.classList.remove('active');
        });

        carousel.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - carousel.offsetLeft;
            const walk = (x - startX) * 2; //scroll-fast
            carousel.scrollLeft = scrollLeft - walk;
        });
    } catch (error) {
        console.error('Erro na função setupCarouselScroll:', error);
    }
}

// SCRIPT MODAL
async function setupModal() {
    try {
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("filterBtn");
        var span = document.getElementsByClassName("close")[0];
        var clearBtn = document.querySelector('.clear-btn');
        var applyBtn = document.querySelector('.apply-btn');

        // abre o modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // fecha o modal no botão de fechar
        span.onclick = function() {
            modal.style.display = "none";
        }

        // fecha o modal se clica em qualquer lugar fora do modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // limpar todos os filtros
        clearBtn.onclick = function() {
            var checkboxes = document.querySelectorAll('.modal-checkbox');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }

        // aplicação dos filtros
        applyBtn.onclick = function() {
            var cidadeChecked = Array.from(document.querySelectorAll('input[name="cidade"]:checked')).map(cb => cb.value);
            var statusChecked = Array.from(document.querySelectorAll('input[name="status"]:checked')).map(cb => cb.value);
            var dormitorioChecked = Array.from(document.querySelectorAll('input[name="dormitorio"]:checked')).map(cb => cb.value);

            // verifica se o filtro "todos" está selecionado para resetar todos os filtros
            if (cidadeChecked.includes('todos')) cidadeChecked = [];
            if (statusChecked.includes('todos')) statusChecked = [];
            if (dormitorioChecked.includes('todos')) dormitorioChecked = [];

            var carouselItems = document.querySelectorAll('.carousel-item');

            carouselItems.forEach(function(item) {
                var cidade = item.getAttribute('data-cidade');
                var status = item.getAttribute('data-status');
                var dormitorio = item.getAttribute('data-dormitorio');

                var cidadeMatch = cidadeChecked.length === 0 || cidadeChecked.includes(cidade);
                var statusMatch = statusChecked.length === 0 || statusChecked.includes(status);
                var dormitorioMatch = dormitorioChecked.length === 0 || dormitorioChecked.includes(dormitorio);

                if (cidadeMatch && statusMatch && dormitorioMatch) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            modal.style.display = 'none';
        }
    } catch (error) {
        console.error('Erro na função setupModal:', error);
    }
}

// CONTROLADOR CARROSSEL DE IMAGENS
async function initializeCarousel() {
    try {
        let currentIndex = 0;
        const images = document.querySelectorAll('.carousel-images img');
        const dots = document.querySelectorAll('.carousel-dots span');
        const prevButton = document.querySelector('.controlador-voltar');
        const nextButton = document.querySelector('.controlador-avancar');

        function updateCarousel() {
            const offset = -currentIndex * 100;
            document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;

            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentIndex].classList.add('active');
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });

        setInterval(() => {
            currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        }, 3000);
    } catch (error) {
        console.error('Erro na função initializeCarousel:', error);
    }
}

document.addEventListener('DOMContentLoaded', async () => {
    try {
        await toggleDisplay();
    } catch (error) {
        console.error('Erro ao executar toggleDisplay:', error);
    }

    try {
        await toggleCardBlog();
    } catch (error) {
        console.error('Erro ao executar toggleCardBlog:', error);
    }

    try {
        await handleScroll();
    } catch (error) {
        console.error('Erro ao executar handleScroll:', error);
    }

    try {
        await setupCarouselScroll();
    } catch (error) {
        console.error('Erro ao executar setupCarouselScroll:', error);
    }

    try {
        await setupModal();
    } catch (error) {
        console.error('Erro ao executar setupModal:', error);
    }

    try {
        await initializeCarousel();
    } catch (error) {
        console.error('Erro ao executar initializeCarousel:', error);
    }
});

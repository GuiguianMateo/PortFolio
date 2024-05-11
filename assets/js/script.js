// Fonction pour vérifier si un élément est visible dans la fenêtre
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour vérifier la visibilité des éléments de diplôme
function checkDiplomesVisibility() {
    var diplomes = document.querySelectorAll('.diplome');
    diplomes.forEach(function(diplome) {
        if (isElementInViewport(diplome) && !diplome.classList.contains('diplome-visible')) {
            diplome.classList.add('diplome-visible');
        }
    });
}

// Événement de défilement pour vérifier la visibilité des éléments de diplôme lors du défilement
window.addEventListener('scroll', checkDiplomesVisibility);

// Vérifiez la visibilité des éléments de diplôme lors du chargement initial de la page
checkDiplomesVisibility();

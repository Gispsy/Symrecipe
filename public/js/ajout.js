// Permet de recuperer le nom de la balise et de pouvoir lui dire quoi faire 

const aj = document.querySelectorAll('.aj')
const form = document.querySelector("form")
console.log(form);
console.log(aj);

// Permet de selectionner n'importe qu'elle buton supprimer
aj.forEach(element => {
element.addEventListener("click", loadAjout)
});

// fonction qui permet d'afficher une alerte propre avec deux validation pour la supression
function loadAjout(e) {

// let url = e.currentTarget.getAttribute('submit')

e.preventDefault();

    Swal.fire(
        'Créer!',
        "L'ingredient a était créer",
        'success',

    ).then((result) =>{
        console.log('coucou')
            form.submit()

    })
}
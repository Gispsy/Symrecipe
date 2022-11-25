//Permet de recuperer le nom de la balise et de pouvoir lui dire quoi faire 

const al = document.querySelector('.submit')

//Permet de selectionner n'importe qu'elle buton supprimer
    al.addEventListener("click", loadModif)

//fonction qui permet d'afficher une alerte propre avec deux validation pour la supression
function loadModif(e) {
    e.preventDefault();

    // var url = e.currentTarget.getAttribute('submit')

            Swal.fire(
                'Modifier!',
                "L'ingrédient a bien été modifier",
                'success',
            )
    }

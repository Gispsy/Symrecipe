// Permet de recuperer le nom de la balise et de pouvoir lui dire quoi faire 

    const md = document.querySelectorAll('.md')
    const form = document.querySelector("form")
    console.log(form);
    console.log(md);

// Permet de selectionner n'importe qu'elle buton supprimer
md.forEach(element => {
    element.addEventListener("click", loadModif)
  });

// fonction qui permet d'afficher une alerte propre avec deux validation pour la supression
function loadModif(e) {

    // let url = e.currentTarget.getAttribute('submit')

    e.preventDefault();

        Swal.fire(
            'Modifier!',
            "L'ingredient a était modifier",
            'success',

        ).then((result) =>{
            console.log('coucou')
                form.submit()

        })
    }
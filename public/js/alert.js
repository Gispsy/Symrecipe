//Permet de recuperer le nom de la balise et de pouvoir lui dire quoi faire 

const al = document.querySelectorAll('.al')

//Permet de selectionner n'importe qu'elle buton supprimer
al.forEach(element => {
    element.addEventListener("click", loadAlert)
  });

//fonction qui permet d'afficher une alerte propre avec deux validation pour la supression
function loadAlert(e) {
    e.preventDefault();


    var url = e.currentTarget.getAttribute('href')
    
    Swal.fire({
        title: 'Tu es sur ?',
        text: "Tu ne pourras pas revenir en arrière !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprime le !'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Supprimer!',
                "L'ingredient a était supprimer",
                'success',
            ).then((result) =>{
                window.location.href = url
            })
        }
    })
}
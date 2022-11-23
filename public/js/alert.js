// Script JS de confirmation pour la suppression d'un ingredient

const confirmation_supprimer = document.querySelectorAll(".al");

function confirmDelete(e)
{
    if(!confirm('Voulez-vous supprimer cet ingrédient ?')) 
    {
        e.preventDefault()
    
}

confirmation_supprimer.forEach(element => {

    element.addEventListener("click", confirmDelete)
    })
}

const al = document.querySelector('.al')
// const Swal = require('sweetalert2')
al.addEventListener("click", loadAlert)

function loadAlert(e) {
    e.preventDefault();
    
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
            'success'
          )
        }
      })
}
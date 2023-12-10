//CREATE
const createUsu = document.getElementById('createUsu')
if (createUsu) {
  createUsu.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget

        let idDelete = button.getAttribute('data-id')
        let nombreDelete = button.getAttribute('data-nombre')
        let apellidoDelete = button.getAttribute('data-apellido')
        let emailDelete = button.getAttribute('data-email')
        let passDelete = button.getAttribute('data-pass')
        let rolDelete = button.getAttribute('data-rol')

        document.getElementById("id").value = idDelete
        document.getElementById("nombre").value = nombreDelete
        document.getElementById("apellido").value = apellidoDelete
        document.getElementById("email").value = emailDelete
        document.getElementById("pass").value = passDelete       
        document.getElementById("rol").value = rolDelete
    })
}
//EDIT
const updateUsu = document.getElementById('updateUsu')
if (updateUsu) {
  updateUsu.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget

        let id = button.getAttribute('id')
        let nom = button.getAttribute('nom')
        let ape = button.getAttribute('ape')
        let email = button.getAttribute('email')
        let pass = button.getAttribute('pass')
        let rol = button.getAttribute('rol')

        document.getElementById("idUpd").value = id
        document.getElementById("nomUpd").value = nom
        document.getElementById("apeUpd").value = ape
        document.getElementById("emailUpd").value = email
        document.getElementById("passUpd").value = pass
        document.getElementById("rolUpd").value = rol
    })
}
//DELETE
const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget

    let id = button.getAttribute('data-bs-whatever')
    let nom = button.getAttribute('data-bs-whatever')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')
    modalBodyInput.value = id

    document.getElementById("nom").innerHTML=nom
  })
}
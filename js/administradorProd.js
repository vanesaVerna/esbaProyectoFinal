//CREATE
const createProd = document.getElementById('createProd')
if (createProd) {
  createProd.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget

        let idDelete = button.getAttribute('data-id')
        let nombreDelete = button.getAttribute('data-nombre')
        let descripcionDelete = button.getAttribute('data-descripcion')
        let precioDelete = button.getAttribute('data-precio')
        let fotoDelete = button.getAttribute('data-foto')

        document.getElementById("id").value = idDelete
        document.getElementById("nombre").value = nombreDelete
        document.getElementById("descripcion").value = descripcionDelete
        document.getElementById("precio").value = precioDelete
        document.getElementById("foto").value = fotoDelete
    })
}
//EDIT
const updateModal = document.getElementById('updateModal')
if (updateModal) {
  updateModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget

        let id = button.getAttribute('id')
        let nom = button.getAttribute('nom')
        let desc = button.getAttribute('desc')
        let precio = button.getAttribute('precio')
        let foto = button.getAttribute('foto')

        document.getElementById("idUpd").value = id
        document.getElementById("nomUpd").value = nom
        document.getElementById("descUpd").value = desc
        document.getElementById("precioUpd").value = precio
        document.getElementById("fotoUpd").value = foto
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
console.log("El archivo JavaScript se ha cargado correctamente.");

// Obtenemos el fragmento de la URL actual (lo que sigue al #)
var productoId = window.location.hash.substring(1);

// Mostrar el producto correspondiente
mostrarProducto(productoId);

function mostrarProducto(id){
  console.log("dentro de la funcion mostrarProductos");
  var productos = ["1", "2", "3"];

  productos.forEach(function(prodId)
  {
    var prod = document.getElementById(prodId);
    if(prod){
      prod.style.display = 'none';
    }
  });

  var prodBlock = document.getElementById(id);
  if(prodBlock){
    prodBlock.style.display = 'block';
  }
}

const forms = document.querySelectorAll('.needs-validation')


document.addEventListener("DOMContentLoaded", function () {
  iniciarApp();
});

function iniciarApp() {
  eliminarEspacios();
}

function eliminarEspacios() {
    // Seleccionar la sección con el paso...
  const nombreSelector = '#nombre';
   const ningunEspacio = document.querySelector(nombreSelector);
   ningunEspacio.ltrim();
   ningunEspacio.rtrim();
   
   // Seleccionar la sección con el paso...
  const emailSelector = '#email';
   const ningunEspacioPrincipioYFin = document.querySelector(emailSelector);
   ningunEspacioPrincipioYFin.trim();

}
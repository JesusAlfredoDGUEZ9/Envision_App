'use strict';

// Función para abrir el modal con el video
function openModal(videoUrl) {
  var modal = document.getElementById('modal');
  var videoFrame = document.getElementById('video');
  videoFrame.src = videoUrl;
  modal.style.display = 'block';
}

// Función para cerrar el modal
document.getElementById('close').addEventListener('click', function() {
  var modal = document.getElementById('modal');
  var videoFrame = document.getElementById('video');
  videoFrame.src = '';
  modal.style.display = 'none';
});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.onclick = function(event) {
  var modal = document.getElementById('modal');
  if (event.target == modal) {
    var videoFrame = document.getElementById('video');
    videoFrame.src = '';
    modal.style.display = 'none';
  }
}

  
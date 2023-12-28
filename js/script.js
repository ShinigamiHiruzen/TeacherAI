document.getElementById('editableDiv').addEventListener('keydown', function (event) {
  // Impede a tecla Enter de funcionar
  if (event.key === 'Enter') {
    event.preventDefault();
    // Desativa a edição de conteúdo após pressionar Enter
    document.getElementById('editableDiv').setAttribute('contenteditable', 'false');
    document.getElementById('editableH3').setAttribute('contenteditable', 'false');
    document.getElementById('editableH4').setAttribute('contenteditable', 'false');
  }
});

function createEditableDiv() {
  // Cria a estrutura da div quando o ícone é clicado
  var newDiv = document.createElement('div');
  newDiv.className = 'back';
  newDiv.id = 'editableDiv';
  newDiv.innerHTML = '<div class="front">' +
    '<h3 contenteditable="true" id="editableH3" oninput="updateHR(this)">Digite o conteúdo do h3</h3>' +
    '<hr>' +
    '<h4 contenteditable="true" id="editableH4" oninput="updateHR(this)">Digite o conteúdo do h4</h4>' +
    '</div>';

  // Adiciona a nova div à página
  document.querySelector('.content').insertBefore(newDiv, document.querySelector('.front1').parentNode);
  // Torna a div recém-criada editável
  newDiv.setAttribute('contenteditable', 'true');
}
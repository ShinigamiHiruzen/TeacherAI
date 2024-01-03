var menuItem = document.querySelectorAll('.item-menu')

function selectLink(){
  menuItem.forEach((item)=>
    item.classList.remove('ativo')
  )
  this.classList.add('ativo')
}

menuItem.forEach((item)=>
  item.addEventListener('click', selectLink)
)

var btnExp = document.querySelector('#btn-exp')
var menuSide = document.querySelector('.barra-lateral')

btnExp.addEventListener('click', function(){
  menuSide.classList.toggle('expandir')
})

document.getElementById('editableDiv').addEventListener('keydown', function (event) {
  // Impede a tecla Enter de funcionar
  if (event.key === 'Enter') {
    event.preventDefault();
    // Desativa a edição de conteúdo após pressionar Enter
    document.getElementById('editableDiv').setAttribute('contenteditable', 'false');
    document.getElementById('editableH4').setAttribute('contenteditable', 'false');
    document.getElementById('editableH5').setAttribute('contenteditable', 'false');
  }
});

function createEditableDiv() {
    var contentDiv = document.getElementById("content");
  
    // Criação do elemento div com a classe quadradu1
    var newDiv = document.createElement("div");
    newDiv.className = "quadradu1";
  
    // Criação do elemento div com a classe box
    var boxDiv = document.createElement("div");
    boxDiv.className = "box";
  
    // Criação do elemento div com a classe nome
    var nomeDiv = document.createElement("div");
    nomeDiv.className = "nome";
  
    // Criação do elemento h4 com conteúdo editável e placeholder
    var h4Element = document.createElement("h4");
    h4Element.contentEditable = true;
    h4Element.innerText = "Digite o nome da disciplina";

  
    // Criação do elemento h5 com conteúdo editável e placeholder
    var h5Element = document.createElement("h5");
    h5Element.contentEditable = true;
    h5Element.innerText = "Nome";
  
    // Adiciona os elementos à estrutura HTML
    nomeDiv.appendChild(h4Element);
    nomeDiv.appendChild(h5Element);
    boxDiv.appendChild(nomeDiv);
    newDiv.appendChild(boxDiv);
    contentDiv.insertBefore(newDiv, document.querySelector('.box-mais').parentNode);
  }
  
  function handleEnterKeyPress(element) {
    // Adiciona a lógica para criar a nova classe quando a tecla Enter for pressionada
    if (event.key === "Enter") {
      event.preventDefault();
      createEditableDiv();
    }
  }

function handleEnterKeyPress(element) {
  // Adiciona a lógica para criar a nova classe quando a tecla Enter for pressionada
  if (event.key === "Enter") {
      event.preventDefault();
      createEditableDiv();
  }
}

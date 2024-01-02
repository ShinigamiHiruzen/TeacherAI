// Função para adicionar uma nova div
function adicionarDiv() {
  var divElement = criarDiv(); // Cria uma nova div
  adicionarFormulario(divElement); // Adiciona o formulário à div
  adicionarDivASection(divElement); // Adiciona a div à section
}

// Função para criar a div
function criarDiv() {
  var divElement = document.createElement('div');
  divElement.className = 'container'; // Adiciona a classe 'container' à div
  return divElement;
}

// Função para adicionar o formulário à div
function adicionarFormulario(divElement) {
  divElement.innerHTML = `
  <form action="#" method="post" id="taskForm2">
                <input type="text" name="taskQuestion" id="taskQuestion" placeholder="Pergunta 1" required>
        
                <div class="opcoesContainer" id="opcoesContainer">
    
                    <div class="opcaoContainer">
                        <input type="radio" id="opcao1" name="resposta1" value="opcao1">
                        <input type="text" id="opcao1Input" value="Opção1">
                    </div>
            
                    <div class="opcaoContainer">
                        <input type="radio" id="opcao2" name="resposta1" value="opcao2">
                        <input type="text" id="opcao2Input" value="Opção2">
                    </div>
            
                    <div class="opcaoContainer">
                        <input type="radio" id="opcao3" name="resposta1" value="opcao3">
                        <input type="text" id="opcao3Input" value="Opção3">
                    </div>
    
                </div>
    
                <div class="back">
                    <div class="front" id="adicionarDivOPC">
                        <i class="fa-solid fa-minus" onclick="removerOPC()"></i>
                        <i class="fa-solid fa-plus" id="plus" onclick="adicionarDivOPC()"></i>
                    </div>
                </div>
        
                <div class="back">
                    <div class="front" id="addDivButton">
                        <i class="fa-solid fa-minus" onclick="removerDiv()"></i>
                        <i class="fa-solid fa-plus" id="plus" onclick="adicionarDiv()"></i>
                    </div>
                </div>
            </form>
  `;
}

// Função para adicionar a div à section
function adicionarDivASection(divElement) {
  var section = document.querySelector('.form');
  section.appendChild(divElement);
}

// Função para remover a última div da section
function removerDiv() {
  var divs = document.querySelectorAll('.container');
  if (divs.length > 0) {
      var section = document.querySelector('.form');
      section.removeChild(divs[divs.length - 1]);
  }
}

//lista turmas
function Turma(nome) {
  this.nome = nome;
}



var turma1 = new Turma("Turma A");
var turma2 = new Turma("Turma B");
var turma3 = new Turma("Turma C");
var turma4 = new Turma("Turma D");
var turma5 = new Turma("Turma E");
var turma6 = new Turma("Turma F");
var turma7 = new Turma("Turma G");
var turma8 = new Turma("Turma H");

var listaDeTurmas = [turma1, turma2, turma3, turma4, turma5, turma6, turma7, turma8];

var divListaTurmas = document.getElementById("listaTurmas");

for (var i = 0; i < listaDeTurmas.length; i++) {
  var turmaDiv = document.createElement("option");

  var checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  checkbox.name = "turmaCheckbox";
  checkbox.value = listaDeTurmas[i].nome;
  turmaDiv.appendChild(checkbox);

  turmaDiv.innerHTML += listaDeTurmas[i].nome;

  divListaTurmas.appendChild(turmaDiv);
}







  var contadorOpcoes = 3; 
        
    function adicionarDivOPC() {
        var opcoesContainer = document.getElementById("opcoesContainer");
        opcoesContainer.className = 'opcoesContainer'

        var novaOpcao = document.createElement("label");
        var novoInputRadio = document.createElement("input");
        var novoInputTexto = document.createElement("input");

        contadorOpcoes++;

        novoInputRadio.type = "radio";
        novoInputRadio.name = "resposta";
        novoInputRadio.value = "opcao" + contadorOpcoes;
        novoInputTexto.type = "text";
        novoInputTexto.id = "opcao" + contadorOpcoes + "Input";
        novoInputTexto.value = " Opção" + contadorOpcoes;

        novaOpcao.appendChild(novoInputRadio);
        novaOpcao.appendChild(novoInputTexto);

        opcoesContainer.appendChild(novaOpcao);
    }

    function removerOPC() {
        var opcoesContainer = document.getElementById("opcoesContainer");

    if (contadorOpcoes > 0) {
        opcoesContainer.removeChild(opcoesContainer.lastElementChild);

    contadorOpcoes--;
    }
    }

/*Sidebar - Configurações*/

var menuItem = document.querySelectorAll('.item')

function selectLink(){
  menuIten.forEach((item)=>
    item.classList.remove('ativo')
  )
  this.classList.add('ativo')
}

menuItem.forEach((item)=>
  item.addEventListener('click', selectLink)
)

var btnExpd = document.querySelector('#btn-expd')
var menuSid = document.querySelector('.config')

btnExpd.addEventListener('click', function(){
  menuSid.classList.toggle('expandir')
})

/*Sidebar - Configurações*/
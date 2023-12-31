function criarElemento() {

  var quadradu = document.createElement("div");
  quadradu.className = "quadradu";

  var box = document.createElement("div");
  box.className = "box";

  var nome = document.createElement("div");
  nome.className = "nome";

  var h4 = document.createElement("h4");
  h4.textContent = "Banco de Dados";

  var h5 = document.createElement("h5");
  h5.textContent = "82676";

  nome.appendChild(h4);
  nome.appendChild(h5);

  box.appendChild(nome);
  quadradu.appendChild(box);

  document.body.appendChild(quadradu1);
}
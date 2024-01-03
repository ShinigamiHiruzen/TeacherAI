

var trilho = document.getElementById('onoff1')

trilho.addEventListener('click', ()=>{
    trilho.classList.toggle('dark')
})

document.addEventListener('DOMContentLoaded', function () {
    var darkModeToggle = document.getElementById('onoff1');
    var body = document.body;
    
    // Verifique se o modo escuro está ativado no armazenamento local
    var isDarkMode = localStorage.getItem('darkMode') === 'enabled';
    body.classList.toggle('dark-mode', isDarkMode);
    darkModeToggle.checked = isDarkMode;

    darkModeToggle.addEventListener('change', function () {
        // Atualize o armazenamento local quando o modo escuro for alterado
        localStorage.setItem('darkMode', darkModeToggle.checked ? 'enabled' : 'disabled');
        body.classList.toggle('dark-mode', darkModeToggle.checked);
    });
});


function toggleVLibras() {
    var vlibrasDiv = document.getElementById('vlibras');
    var checkbox = document.getElementById('onoff2');

    if (checkbox.checked) {
        vlibrasDiv.style.display = 'block';
    } else {
        vlibrasDiv.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var vlibrasDiv = document.getElementById('vlibras');
    var checkbox = document.getElementById('onoff2');

    // Verifica se há um valor armazenado no localStorage
    var isChecked = localStorage.getItem('onoff2') === 'true';

    // Define o estado da caixa de seleção com base no valor armazenado
    checkbox.checked = isChecked;

    // Atualiza a exibição com base no estado da caixa de seleção
    if (isChecked) {
        vlibrasDiv.style.display = 'block';
    } else {
        vlibrasDiv.style.display = 'none';
    }

    // Adiciona um ouvinte de evento para detectar mudanças na caixa de seleção
    checkbox.addEventListener('change', function () {
        // Armazena o estado da caixa de seleção no localStorage
        localStorage.setItem('onoff2', checkbox.checked);

        // Atualiza a exibição com base no estado da caixa de seleção
        if (checkbox.checked) {
            vlibrasDiv.style.display = 'block';
        } else {
            vlibrasDiv.style.display = 'none';
        }
    });
});

window.isVLibrasAtivado = function() {
    var checkbox = document.getElementById('onoff2');
    return checkbox.checked;
};

document.addEventListener('DOMContentLoaded', function () {
    toggleVLibras(); 
});



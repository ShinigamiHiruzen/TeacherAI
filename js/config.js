var trilho = document.getElementById('onoff1')

trilho.addEventListener('click', ()=>{
    trilho.classList.toggle('dark')
})

document.addEventListener('DOMContentLoaded', function () {
    var darkModeToggle = document.getElementById('onoff1'); // ou qualquer outra maneira de obter o elemento
    var body = document.body;

    darkModeToggle.addEventListener('change', function () {
        body.classList.toggle('dark-mode', darkModeToggle.checked);
    });
}); 
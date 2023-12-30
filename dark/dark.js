document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const stylesheet = document.getElementById('stylesheet');

    // Adiciona um ouvinte de evento para o toggle de modo escuro
    darkModeToggle.addEventListener('change', function() {
        // Alterna a classe 'dark-mode' no corpo da página
        document.body.classList.toggle('dark-mode');
        
        // Alterna a classe 'dark-mode' na folha de estilo
        stylesheet.href = document.body.classList.contains('dark-mode') ? 'dark.css' : 'dark.css';
    });
});

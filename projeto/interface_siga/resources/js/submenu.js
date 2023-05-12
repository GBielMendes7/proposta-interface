// Selecione o link do menu com submenu
var consultaMenu = document.getElementById('consulta-menu');

// Adicione um manipulador de eventos de clique ao link do menu
consultaMenu.addEventListener('click', function (event) {
    // Previna o comportamento padrão do link
    event.preventDefault();

    // Selecione o submenu associado ao link do menu
    var submenu = consultaMenu.nextElementSibling;

    // Alterne a exibição do submenu
    submenu.classList.toggle('ativo');
});
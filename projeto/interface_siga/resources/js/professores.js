let botao = document.getElementById('prof');
let telaProf = document.getElementById('professores');

botao.addEventListener('click', function(event) {
    
    event.preventDefault();
    let professor = telaProf.nextElementSibling;
    professor.classList.toggle('ativo');
    /*if(telaProf.style.display === "none"){
        telaProf.style.display = "block";
    }else{
        telaProf.style.display = "none";
    }*/
});
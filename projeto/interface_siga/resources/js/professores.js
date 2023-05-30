let botao = document.getElementById('prof');

botao.addEventListener('click', function() {
    let telaProf = document.getElementById('professores');
    if(telaProf.style.display === "none"){
        telaProf.style.display = "block";
    }else{
        telaProf.style.display = "none";
    }
});
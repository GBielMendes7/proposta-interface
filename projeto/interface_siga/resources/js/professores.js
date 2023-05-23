let professor = document.getElementById('prof');

professor.addEventListener('click', function() {
    let telaProf = document.getElementById('professores');
    if(telaProf.style === "none"){
        telaProf.style = "block";
    }else{
        telaProf.style = "none";
    }
});
let botao = document.getElementById('prof');

botao.addEventListener('click', function() {
  let telaProf = document.querySelectorAll('.professores');
  for (let i = 0; i < telaProf.length; i++) {
    telaProf[i].classList.toggle("hide");
  }
});

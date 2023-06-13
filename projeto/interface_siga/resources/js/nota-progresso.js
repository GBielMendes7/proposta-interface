// Obter todos os elementos que têm a classe "faltas"
var faltas = document.querySelectorAll(".box-grafico");

// Percorrer esses elementos e atualizar as barras de progresso e os valores
for (var i = 0; i < faltas.length; i++) {
  // Obter o elemento atual
  var falta = faltas[i];

  // Obter o elemento que contém o valor da porcentagem
  var progressValue = falta.querySelector(".titulo-grafico[data-value]");

  // Obter o valor desse elemento e convertê-lo para um número inteiro
  var value = parseInt(progressValue.dataset.value);

  // Obter o elemento da barra de progresso
  var progressBar = falta.querySelector(".grafico");

  // Atualizar a largura da barra de progresso e o texto do valor
  progressBar.style.width = value + "%";
}

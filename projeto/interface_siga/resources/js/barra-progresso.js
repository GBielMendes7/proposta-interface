// Definir o valor máximo
var maxValue = 100;

// Obter todos os elementos que têm a classe "faltas"
var faltas = document.querySelectorAll(".faltas");

// Percorrer esses elementos e atualizar as barras de progresso e os valores
for (var i = 0; i < faltas.length; i++) {
  // Obter o elemento atual
  var falta = faltas[i];

  // Obter o elemento que contém o valor da porcentagem
  var progressValue = falta.querySelector(".conteudo_falta[data-value]");

  // Obter o valor desse elemento e convertê-lo para um número inteiro
  var value = parseInt(progressValue.dataset.value);

  // Calcular a porcentagem com base no valor máximo
  var percentage = (value / maxValue) * 100;

  // Obter o elemento da barra de progresso
  var progressBar = falta.querySelector(".progress-bar");

  // Atualizar a largura da barra de progresso e o texto do valor
  progressBar.style.width = percentage + "%";
}

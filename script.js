function mostrarInput(select) {
  var inputOutro = document.getElementById("outro");
  if (select.value === "outros") {
      inputOutro.style.display = "block";
  } else {
      inputOutro.style.display = "none";
  }
}
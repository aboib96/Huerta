const descripcion = document.getElementById("descripcion");
const contador = document.getElementById("contador");


descripcion.addEventListener("input", function (e) {
  const target = e.target;
  const longitudMax = target.getAttribute("maxlength");
  const longitudAct = target.value.length;
  contador.innerHTML = `${longitudAct}/${longitudMax}`;
});    



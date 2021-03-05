function desafio() {
    let valor = document.getElementById("campo-valor").value;
    let valorCalculado = 0;
    if (!isNaN(valor)) {
        if (valor < 0) { 
            valor *= -1;
            document.getElementById("campo-valor").value = valor;
        }

        for (let i = 0; i < valor; i++) {
            if (i % 3 === 0 || i % 5 === 0) {
                valorCalculado += i;
            }
        }

        document.getElementById("valor-original").innerHTML = valor;
        document.getElementById("campo-resultado").innerHTML = valorCalculado;
        document.getElementById("resultado").style.display = "block";
    }
}
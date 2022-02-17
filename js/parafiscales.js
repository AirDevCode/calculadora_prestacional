function calcular() {
    const formatterPeso = new Intl.NumberFormat('es-CO', {
        minimumFractionDigits: 0
    })

    var roundIni = 1;
    var roundFin = 10000;
    document.getElementById('random').value = Math.round(Math.random() * (roundFin - roundIni) + parseInt(roundIni));

    var salario = parseInt(document.getElementById('salario').value);
    if (salario >= 877803) {
        var sena = salario * 0.02;
        var icbf = salario * 0.03;
        var caja = salario * 0.04;
        var totalParafiscales = sena + icbf + caja;
        document.getElementById('sena').value = formatterPeso.format(sena);
        document.getElementById('icbf').value = formatterPeso.format(icbf);
        document.getElementById('caja').value = formatterPeso.format(caja);
        document.getElementById('total').value = formatterPeso.format(totalParafiscales);
    } else {
        { alert("Ingrese un valor válido para el salario, este debe ser mayor al salario mínimo legal en Colombia: 877.803 COP") }
    }
}
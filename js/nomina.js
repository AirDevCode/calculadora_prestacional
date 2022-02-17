function liquidar() {
    const formatterPeso = new Intl.NumberFormat('es-CO', {
        minimumFractionDigits: 0
    })

    var salario = parseInt(document.getElementById('salario').value);
    var dia = parseInt(document.getElementById('dias').value);
    if (salario >= 877803 && dia > 0) {
        var salarioBase = salario / 30 * dia;
        document.getElementById('basico').value = formatterPeso.format(salarioBase);

        if (salario >= 1755606) {
            var transporte = 0
            document.getElementById('transporte').value = formatterPeso.format(transporte);
        }
        else {
            var transporte = 102854 / 30 * dia;
            document.getElementById('transporte').value = formatterPeso.format(transporte);
        }

        var nroHed = parseInt(document.getElementById('hed').value);
        var nroHen = parseInt(document.getElementById('hen').value);
        var nroHedf = parseInt(document.getElementById('hedf').value);
        var nroHenf = parseInt(document.getElementById('henf').value);


        if (nroHed > 0) {

        } else {
            nroHed = 0;
            document.getElementById('hed').value = 0;
        }
        if (nroHen > 0) {

        } else {
            nroHen = 0
            document.getElementById('hen').value = 0;
        }
        if (nroHedf > 0) {

        } else {
            nroHedf = 0
            document.getElementById('hedf').value = 0;
        }
        if (nroHenf > 0) {

        } else {
            nroHenf = 0
            document.getElementById('henf').value = 0;
        }

        var valorHed = salario / 240 * nroHed * 1.25;
        var valorHen = salario / 240 * nroHen * 1.75;
        var valorHedf = salario / 240 * nroHedf * 2;
        var valorHenf = salario / 240 * nroHenf * 2.5;

        var totalHorasExtra = valorHed + valorHen + valorHedf + valorHenf;
        document.getElementById('valorhex').value = formatterPeso.format(totalHorasExtra);

        var devengadosAdd = parseInt(document.getElementById('devengados').value);
        if (devengadosAdd > 0) {


        } else {
            (devengadosAdd) = 0;
            document.getElementById('devengados').value = 0;
        }


        var totalDevengado = salarioBase + transporte + totalHorasExtra + devengadosAdd
        document.getElementById('total').value = formatterPeso.format(totalDevengado);

        //Deducidos

        var eps = (salarioBase - transporte) * 0.04;
        document.getElementById('eps').value = formatterPeso.format(eps);

        var pension = (salarioBase - transporte) * 0.04;
        document.getElementById('pension').value = formatterPeso.format(pension);

        if (totalDevengado >= 1755606 * 2) {
            var fondo = totalDevengado * 0.01;
            document.getElementById('fondo').value = formatterPeso.format(fondo);
        }
        else {
            var fondo = 0;
            document.getElementById('fondo').value = fondo;
        }

        var deducidosAdd = parseInt(document.getElementById('deducidos').value);

        if (deducidosAdd > 0) {

        } else {
            deducidosAdd = 0;
            document.getElementById('deducidos').value = 0;
        }

        var totalDeducidos = eps + pension + fondo + deducidosAdd;
        document.getElementById('totaldeducidos').value = formatterPeso.format(totalDeducidos);
    }
    else { alert("Ingrese un valor válido para el salario, este debe ser mayor al salario mínimo legal en Colombia: 877.803 COP") }

}

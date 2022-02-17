function calcular() {

    const formatterPeso = new Intl.NumberFormat('es-CO', {
        minimumFractionDigits: 0
    })

    var roundIni = 1;
    var roundFin = 10000;
    document.getElementById('random').value = Math.round(Math.random() * (roundFin - roundIni) + parseInt(roundIni));

    var dateIni = new Date(document.getElementById('dateIni').value);
    var dateEnd = new Date(document.getElementById('dateEnd').value);


    var dateEndDays = dateEnd.getUTCDate();
    var dateIniDays = dateIni.getUTCDate();

    var dateEndMonth = dateEnd.getUTCMonth() + 1;
    var dateInitMonth = dateIni.getUTCMonth() + 1;

    var year = dateIni.getUTCFullYear();

    //Se arman las fechas con los datos de la zona horaria
    var dateInit = new Date(year + "-" + dateInitMonth + "-" + dateIniDays)
    var dateFin = new Date(year + "-" + dateEndMonth + "-" + dateEndDays)
    var daysDiff = dateFin.getTime() - dateInit.getTime()
    var countDays = Math.round(daysDiff / (1000 * 60 * 60 * 24));
    var salario = parseInt(document.getElementById('salario').value);



    if (salario >= 877803) {

        if (dateEndMonth <= 6) {
            if (countDays > 180) {
                countDays = 180
            }

            
            primaSemestreUno = Math.round((salario * countDays) / 360);
            primaSemestreDos = 0;

            document.getElementById('dias').value = countDays;
            document.getElementById('primSemestre').value = formatterPeso.format(primaSemestreUno);
            document.getElementById('segSemestre').value = formatterPeso.format(primaSemestreDos);

            var totalCesantias = Math.round((salario * countDays) / 360);
            document.getElementById('cesantias').value = formatterPeso.format(totalCesantias);
            var interesesCesantias = Math.round(((totalCesantias * countDays * 0.12) / 360));
            document.getElementById('intCesantias').value = formatterPeso.format(interesesCesantias);
            var vacations = Math.round((salario * countDays) / 720);
            document.getElementById('vacaciones').value = formatterPeso.format(vacations);

            var totalLiquidacion = totalCesantias + interesesCesantias + primaSemestreUno + primaSemestreUno + vacations;
            document.getElementById('totalLiq').value = formatterPeso.format(totalLiquidacion);

        }

        if (dateInitMonth >= 1 && dateInitMonth <= 6 && dateEndMonth > 6) {

            var dateCalcIni = new Date(new Date().getUTCFullYear() + "-" + 6 + "-" + 31)
            var diffIni = dateCalcIni.getTime() - dateInit.getTime();
            var countIni = Math.round(diffIni / (1000 * 60 * 60 * 24));
            if (countIni > 180) {
                countIni = 180
            }

            primaSemestreUno = Math.round((salario * countIni) / 360);
            document.getElementById('primSemestre').value = formatterPeso.format(primaSemestreUno);

            var dateCalcFin = new Date(new Date().getUTCFullYear() + "-" + 6 + "-" + 30)
            var diffEnd = dateFin.getTime() - dateCalcFin.getTime();
            var countFin = Math.round(diffEnd / (1000 * 60 * 60 * 24));
            if (countFin > 180) {
                countFin = 180
            }

            primaSemestreDos = Math.round((salario * countFin) / 360);
            document.getElementById('segSemestre').value = formatterPeso.format(primaSemestreDos);
            var sum = countIni + countFin;

            document.getElementById('dias').value = sum;

            var totalCesantias = Math.round((salario * sum) / 360);
            document.getElementById('cesantias').value = formatterPeso.format(totalCesantias);
            var interesesCesantias = Math.round(((totalCesantias * sum * 0.12) / 360));
            document.getElementById('intCesantias').value = formatterPeso.format(interesesCesantias);
            var vacations = Math.round((salario * sum) / 720);
            document.getElementById('vacaciones').value = formatterPeso.format(vacations);

            var totalLiquidacion = totalCesantias + interesesCesantias + primaSemestreUno + primaSemestreUno + vacations;
            document.getElementById('totalLiq').value = formatterPeso.format(totalLiquidacion);
        }


        if (dateInitMonth > 6) {
            if (countDays > 180) {
                countDays = 180
            }

            primaSemestreUno = 0;
            primaSemestreDos = Math.round((salario * countDays) / 360);

            document.getElementById('dias').value = countDays;
            document.getElementById('primSemestre').value = formatterPeso.format(primaSemestreUno);
            document.getElementById('segSemestre').value = formatterPeso.format(primaSemestreDos);

            var totalCesantias = Math.round((salario * countDays) / 360);
            document.getElementById('cesantias').value = formatterPeso.format(totalCesantias);
            var interesesCesantias = Math.round(((totalCesantias * countDays * 0.12) / 360));
            document.getElementById('intCesantias').value = formatterPeso.format(interesesCesantias);
            var vacations = Math.round((salario * countDays) / 720);
            document.getElementById('vacaciones').value = formatterPeso.format(vacations);

            var totalLiquidacion = totalCesantias + interesesCesantias + primaSemestreUno + primaSemestreUno + vacations;
            document.getElementById('totalLiq').value = formatterPeso.format(totalLiquidacion);
        }


    } else {
        { alert("Ingrese un valor válido para el salario, este debe ser mayor al salario mínimo legal en Colombia: 877.803 COP") }
    }
}
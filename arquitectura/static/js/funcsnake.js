c = document.getElementById('c').getContext("2d");
var sc = document.getElementById("Puntaje");
var msc = document.getElementById("Puntajem");
largo = 1;
a = [{ x: 0, y: 0 }];
xv = yv = 0;
puntaje = 0
puntajem = 0
window.onkeydown = function(tecla) {
    tecla = tecla.keyCode;
    if (tecla == 37) { xv = -1;
        yv = 0 }
    if (tecla == 38) { xv = 0;
        yv = -1 }
    if (tecla == 39) { xv = 1;
        yv = 0 }
    if (tecla == 40) { xv = 0;
        yv = 1 }
}

function g() {
    f = {
        x: Math.floor(Math.random() * 15),
        y: Math.floor(Math.random() * 15)
    }
}
g();

function d() {
    x = a[0].x + xv;
    y = a[0].y + yv;
    if (x > 14) { x = 0 }
    if (x < 0) { x = 14 }
    if (y > 14) { y = 0 }
    if (y < 0) { y = 14 }
    a.unshift({ x: x, y: y });
    for (var i = 1; i < largo; i++) {
        if (x == a[i].x && y == a[i].y) {
            largo = 1;
            puntaje = 0
        }
    }
    if (x == f.x && y == f.y) {
        largo++;
        puntaje++;
        document.getElementById("pntaje").value = puntaje;
        sc.innerHTML = "Puntaje: " + puntaje;
        if (puntaje > puntajem) {
            puntajem = puntaje;
            msc.innerHTML = "Maximo Puntaje:" + puntajem;
            sc.innerHTML = "Puntaje: " + puntaje;
        }
        g();
    }
    c.clearRect(0, 0, 500, 500);
    c.strokeRect(0, 0, 15 * 30, 15 * 30);

    for (var i = 0; i < largo; i++) {
        c.fillRect(a[i].x * 30, a[i].y * 30, 25, 25);
    }
    c.fillRect(f.x * 30, f.y * 30, 25, 25);
}
setInterval(d, 100);
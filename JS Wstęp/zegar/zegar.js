function zegar() {
    data = new Date();
    let g = data.getHours()
    let m = data.getMinutes()
    let s = data.getSeconds()

    if (g < 10) {
        g = "0" + g
    }
    if (m < 10) {
        m = "0" + m
    }
    if (s < 10) {
        s = "0" + s
    }
    document.getElementById('czas').innerHTML = `${g}:${m}:${s}`
    setTimeout('zegar()', 1000)

}   
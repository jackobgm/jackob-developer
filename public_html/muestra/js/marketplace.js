const rO = document.getElementById("rangeO"),
    rT = document.getElementById("rangeT"),
    nO = document.getElementById("numberO"),
    nT = document.getElementById("numberT");

rO.addEventListener('change', e => {
    let v = e.target

    nO.value = v.value
})
rO.addEventListener('mousemove', e => {
    let v = e.target

    nO.addEventListener("keyup", () => {
        v.value = nO.value
    })
    nO.value = v.value
})

rT.addEventListener('change', e => {
    let v = e.target

    nT.value = v.value
})
rT.addEventListener('mousemove', e => {
    let v = e.target

    nT.addEventListener("keyup", () => {
        v.value = nT.value
    })
    nT.value = v.value
})

fean.style.marginTop = `${hNavbar}px`;
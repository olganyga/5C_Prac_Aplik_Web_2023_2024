function pokaz(id) {
    let art = document.getElementById(id)
    let art_1 = document.getElementById('art_1')
    let art_2 = document.getElementById('art_2')
    let art_3 = document.getElementById('art_3')
    let art_4 = document.getElementById('art_4')
    art_1.style.display = 'none'
    art_2.style.display = 'none'
    art_3.style.display = 'none'
    art_4.style.display = 'none'
    art.style.display = 'block'

}
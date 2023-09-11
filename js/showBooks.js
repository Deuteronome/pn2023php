const genres = document.getElementsByClassName('genreList')
const tables = document.getElementsByClassName('booksTable')

function showHideTable(i) {
    if(tables[i].style.display === 'flex') {
        tables[i].style.display = 'none'
    }else {        
        tables[i].style.display = 'flex'
    }
}

for(let i = 0; i<genres.length; i++) {
    genres[i].addEventListener('click', showHideTable.bind(null, i))
}

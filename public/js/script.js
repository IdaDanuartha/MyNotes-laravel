 //script animation search bar
const iconButton = document.querySelector('#icon-button');
const searchForm = document.querySelector('.search-form');

iconButton.addEventListener('click', function() {
    searchForm.classList.toggle('form-active');
})


// script untuk menghilangkan fungsi upload image
document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
});


// script untuk animasi typing text
const texts = ['MATHEMATICS', 'PHYSICS', 'CHEMISTRY', 'BIOLOGY'];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';

(function type() {
    
    if (count === texts.length) {
        count = 0;
    }
    currentText = texts[count];
    letter = currentText.slice(0, ++index);
    
    document.querySelector('.typing-text').textContent = letter;
    if ( letter.length === currentText.length) {
        count++;
        index = 0;
    }
    setTimeout(type, 300);
}());




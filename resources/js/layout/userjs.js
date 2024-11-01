const userMenuButton = document.getElementById('user-menu')
const searchInput = document.querySelector('input#search-input')
const buttonSearchMeaning = document.querySelector('button#searchViaMeaning');

userMenuButton.addEventListener('click', function() {
    const userMenu = document.querySelector('.user_menu');
    if (userMenu.style.display === 'none' || userMenu.style.display === '') {
        userMenu.style.display = 'block';
        userMenuButton.style.backgroundColor = "#475741";
    } else {
        userMenu.style.display = 'none';
        userMenuButton.style.backgroundColor = "#8DA683";
    }
});


buttonSearchMeaning.addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = '/result?keyword=' + searchInput.value;
})

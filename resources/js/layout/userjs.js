const userMenuButton = document.getElementById('user-menu')
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

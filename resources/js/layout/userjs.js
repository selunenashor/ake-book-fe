const userMenuButton = document.getElementById('user-menu')
const searchInput = document.querySelector('input#search-input')
const buttonSearchMeaning = document.querySelector('button#searchViaMeaning');
const logOutButton = document.querySelector('a#logout')

if (userMenuButton){
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
}

buttonSearchMeaning.addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = '/result?keyword=' + searchInput.value;
})

if (logOutButton){
    logOutButton.addEventListener('click', function(){
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch('/logout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(response => {
            window.location.href = '/'
        })
        .catch(error => {
            console.error(error);
            return
        });
    })
}

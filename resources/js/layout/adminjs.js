const logOutButton = document.querySelector('a#logout')

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

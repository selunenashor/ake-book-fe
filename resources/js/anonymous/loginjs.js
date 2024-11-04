const login = document.querySelector('button#login')

login.addEventListener('click', function () {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const username = document.querySelector('input#username').value
    const password = document.querySelector('input#password').value

    const accountInfo = {
        username,
        password
    }
    fetch('/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(accountInfo)
    })
    .then(response => {
        if (!response.ok) {
            if(response.status === 400){
                document.querySelector('span.error').innerHTML = "Tài khoản hoặc/và mật khẩu không chính xác!"
                return
            }
            else{
                document.querySelector('span.error').innerHTML = "Có lỗi xảy ra"
                return
            }
        }
        else{
            window.location.href = '/'
        }
    })
    .catch(error => {
        document.querySelector('span#error').innerHTML = "Có lỗi xảy ra!"
        return
    });
})

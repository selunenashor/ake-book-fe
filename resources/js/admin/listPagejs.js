const buttonUrlConfirm = document.getElementById('urlImageConfirm')
const buttonUploadImage = document.getElementById('localImage')
const isDeathCheck = document.querySelector('input#isDeath')
const authorDeathDate = document.querySelector('div#authorDeathDate')
const fileName = document.getElementById('file-name')
const fileInput = document.getElementById('fileInput')
const imageString = document.getElementById('image-string')
const buttonAuthorConfirm = document.getElementById('addAuthorConfirm')
const errorDiv = document.querySelector('div.error')

authorDeathDate.style.display = "none"

buttonUrlConfirm.addEventListener('click', function() {

    const urlImageValue = document.querySelector('input#urlImage').value;
    fileName.value = urlImageValue;
    imageString.value = urlImageValue;
});

isDeathCheck.addEventListener('change', function(){
    if (!this.checked){
        authorDeathDate.style.display = "none"
    }
    else{
        authorDeathDate.style.display = "block"
    }
})

buttonUploadImage.addEventListener('click', function() {
    fileInput.click(); // Trigger the file input
});

fileInput.addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const base64String = e.target.result; // Get the Base64 string
            imageString.value = base64String; // Set the value
            fileName.value = file.name
        };
        reader.readAsDataURL(file); // Read the file as Data URL (Base64)
    }
});

buttonAuthorConfirm.addEventListener('click', function() {
    // Gather input values
    const name = document.getElementById('name').value || null;
    const stageName = document.getElementById('stageName').value || null;
    const nationality = document.getElementById('nationality').value || null;
    const birthDate = document.getElementById('birthDate').value || null;
    const birthPlace = document.getElementById('birthPlace').value || null;
    const isDeath = document.getElementById('isDeath').checked;
    const deathDate = document.getElementById('deathDate').value || null;
    const website = document.getElementById('website').value || null;
    const description = document.getElementById('description').value || null;
    const image = document.getElementById('image-string').value || null;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (name === null){
        error.innerHTML = "Tên là bắt buộc"
        return
    }
    // Create a data object
    const authorData = {
        name,
        stageName,
        nationality,
        birthDate,
        birthPlace,
        ...(isDeath ? { deathDate } : {}), // Conditionally include deathDate
        website,
        description,
        image,
    };

    // Send a POST request
    fetch('/admin/author/create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(authorData),
    })
    .then(response => {
        if (!response.ok) {
            errorDiv.innerHTML = "Có lỗi xảy ra!"
            return
        }
        else{
            window.location.reload()
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

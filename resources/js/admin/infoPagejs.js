const buttonEdit = document.querySelector('#edit')
const buttonView = document.querySelector('#view')
const buttonConfirm = document.querySelector('#confirm')
const authorInfoMode = document.querySelector('.author_info')
const checkBoxTag = document.querySelectorAll('.checkBox_tag input')
const buttonUrlConfirm = document.getElementById('urlImageConfirm')
const fileName = document.getElementById('file-name')
const fileInput = document.getElementById('fileInput')
const imageString = document.getElementById('image-string')
const buttonUploadImage = document.getElementById('localImage')
const image = document.querySelector('.info img')
const errorDiv = document.querySelector('div.error')


checkBoxTag.forEach(element => {

    const forAttribute = element.getAttribute('for')
    const checkBokRefer = document.querySelector('#' + forAttribute)
    checkBokRefer.style.display = element.checked ? 'grid' : 'none'

    element.addEventListener('change', function(){
        const forAttribute = element.getAttribute('for')
        const checkBokRefer = document.querySelector('#' + forAttribute)
        checkBokRefer.style.display = element.checked ? 'grid' : 'none'
    })
});

buttonUrlConfirm.addEventListener('click', function() {
    const urlImageValue = document.querySelector('input#urlImage').value;
    fileName.value = urlImageValue;
    imageString.value = urlImageValue;
    image.setAttribute('src', urlImageValue)
    image.setAttribute('alt', 'Image URL/file invalid')
});

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
            image.setAttribute('src', base64String)
            image.setAttribute('alt', 'Image URL/file invalid')
        };
        reader.readAsDataURL(file); // Read the file as Data URL (Base64)
    }
});

buttonEdit.addEventListener('click', function(){
    buttonEdit.style.display = "none"
    buttonView.style.display = "inline-block"
    buttonConfirm.style.display = "inline-block"

    authorInfoMode.classList.remove('viewMode');
    authorInfoMode.classList.add('editMode');

})

buttonView.addEventListener('click', function(){
    buttonEdit.style.display = "inline-block"
    buttonView.style.display = "none"
    buttonConfirm.style.display = "none"

    authorInfoMode.classList.remove('editMode');
    authorInfoMode.classList.add('viewMode');
})

buttonConfirm.addEventListener('click', function(){
    const id = document.querySelector('input#id').value
    const name = document.querySelector('input#name').value || null;
    const stageName = document.querySelector('input#stageName').value || null;
    const nationality = document.querySelector('input#nationality').value || null;
    const birthDate = document.querySelector('input#birthDate').value || null;
    const birthPlace = document.querySelector('input#birthPlace').value || null;
    const isDeath = document.querySelector('input#isDeath').checked;
    const deathDate = document.querySelector('input#deathDate').value || null;
    const website = document.querySelector('input#website').value || null;
    const description = document.querySelector('input#description').value || null;
    const image = document.querySelector('input#image-string').value || null;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (name === null){
        errorDiv.innerHTML = "Tên là bắt buộc"
        return
    }

    const authorData = {
        id,
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

    fetch('/admin/author/edit', {
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
            window.location.href = '/admin/authors';
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
})


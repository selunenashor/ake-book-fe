const buttonEdit = document.querySelector('#edit')
const buttonView = document.querySelector('#view')
const buttonConfirm = document.querySelector('#confirm')
const authorInfoMode = document.querySelector('.book_info')
const buttonUrlConfirm = document.getElementById('urlImageConfirm')
const fileName = document.getElementById('file-name')
const fileInput = document.getElementById('fileInput')
const imageString = document.getElementById('image-string')
const buttonUploadImage = document.getElementById('localImage')
const image = document.querySelector('.info img')
const errorDiv = document.querySelector('div.error')


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
    const title = document.getElementById('title').value || null;
    const author = document.getElementById('author').value || null;
    const genres_string = document.getElementById('genres').value || null;
    const publishedAt_dateTime = document.getElementById('publishedAt').value || null;
    const publisher = document.getElementById('publisher').value || null;
    const totalPages= document.getElementById('totalPages').value || null;
    const language = document.getElementById('language').value || null;
    const description = document.getElementById('description').value || null;
    const image = document.getElementById('image-string').value || null;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (!title){
        errorDiv.innerHTML = "Tiêu đề sách không được để trống"
        return
    }
    if (!author){
        errorDiv.innerHTML = "Phải có ít nhất một tác giả"
        return
    }

    if (!genres_string){
        errorDiv.innerHTML = "Thể loại không được để trống"
        return
    }
    if (!publishedAt_dateTime){
        errorDiv.innerHTML = "Thời gian xuất bản sách không được để trống"
        return
    }

    if (!publisher){
        errorDiv.innerHTML = "Nhà xuất bản không được để trống"
        return
    }
    if (publisher.length < 5 || publisher.length >100){
        errorDiv.innerHTML = "Tên nhà xuất bản phải nằm trong khoảng từ 5 - 100 kí tự"
        return
    }

    if (!totalPages){
        errorDiv.innerHTML = "Số trang không được để trống"
        return
    }

    if (!language){
        errorDiv.innerHTML = "Ngôn ngữ không được để trống"
        return
    }

    if (!description){
        errorDiv.innerHTML = "Miêu tả không được để trống"
        return
    }

    if (!image){
        errorDiv.innerHTML = "Hình ảnh không được để trống"
        return
    }

    const genres = genres_string.split(',').map(item=>item.trim())
    const publishedAt_date = new Date(publishedAt_dateTime)
    const publishedAt = Math.floor(publishedAt_date.getTime() / 1000)
    // Create a data object
    const bookData = {
        id: id,
        title: title,
        authorIds: [parseInt(author)],
        genres: genres,
        publishedAt: publishedAt,
        publisher: publisher,
        totalPages: totalPages,
        categories: [],
        language: language,
        description: description,
        image: image
    };
    console.log(bookData)

    // Send a POST request
    fetch('/admin/book/edit', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(bookData),
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
})


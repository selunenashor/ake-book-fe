const buttonUrlConfirm = document.getElementById('urlImageConfirm')
const buttonUploadImage = document.getElementById('localImage')
const fileName = document.getElementById('file-name')
const fileInput = document.getElementById('fileInput')
const imageString = document.getElementById('image-string')
const buttonBookConfirm = document.getElementById('addBookConfirm')
const error_addBook = document.querySelector('div#error_addBook')



buttonUrlConfirm.addEventListener('click', function() {

    const urlImageValue = document.querySelector('input#urlImage').value;
    fileName.value = urlImageValue;
    imageString.value = urlImageValue;
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
        };
        reader.readAsDataURL(file); // Read the file as Data URL (Base64)
    }
});

buttonBookConfirm.addEventListener('click', function() {

    const title = document.getElementById('title').value || null;
    const author = document.getElementById('author').value || null;
    const genres_string = document.getElementById('genres').value || null;
    const publishedAt_dateTime = document.getElementById('publishedAt').value || null;
    const publisher = document.getElementById('publisher').value || null;
    const totalPages= document.getElementById('totalPages').value || null;
    const categories_string = document.getElementById('categories').value || null;
    const language = document.getElementById('language').value || null;
    const description = document.getElementById('description').value || null;
    const image = document.getElementById('image-string').value || null;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (!title){
        error_addBook.innerHTML = "Tiêu đề sách không được để trống"
        return
    }
    if (!author){
        error_addBook.innerHTML = "Phải có ít nhất một tác giả"
        return
    }

    if (!genres_string){
        error_addBook.innerHTML = "Thể loại không được để trống"
        return
    }
    if (!publishedAt_dateTime){
        error_addBook.innerHTML = "Thời gian xuất bản sách không được để trống"
        return
    }

    if (!publisher){
        error_addBook.innerHTML = "Nhà xuất bản không được để trống"
        return
    }
    if (publisher.length < 5 || publisher.length >100){
        error_addBook.innerHTML = "Tên nhà xuất bản phải nằm trong khoảng từ 5 - 100 kí tự"
        return
    }

    if (!totalPages){
        error_addBook.innerHTML = "Số trang không được để trống"
        return
    }

    if (!categories_string){
        error_addBook.innerHTML = "Phân loại không được để trống"
        return
    }

    if (!language){
        error_addBook.innerHTML = "Ngôn ngữ không được để trống"
        return
    }

    if (!description){
        error_addBook.innerHTML = "Miêu tả không được để trống"
        return
    }

    if (!image){
        error_addBook.innerHTML = "Hình ảnh không được để trống"
        return
    }

    const genres = genres_string.split(',').map(item=>item.trim())
    const categories = categories_string.split(',').map(item=>item.trim())
    const publishedAt_date = new Date(publishedAt_dateTime)
    const publishedAt = Math.floor(publishedAt_date.getTime() / 1000)
    // Create a data object
    const bookData = {
        title: title,
        authorIds: [parseInt(author)],
        genres: genres,
        publishedAt: publishedAt,
        publisher: publisher,
        totalPages: totalPages,
        categories: categories,
        language: language,
        description: description,
        image: image
    };
    console.log(bookData)

    // Send a POST request
    fetch('/admin/book/create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(bookData),
    })
    .then(response => {
        if (!response.ok) {
            error_addBook.innerHTML = "Có lỗi xảy ra!"
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

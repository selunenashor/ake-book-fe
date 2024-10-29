const buttonEdit = document.querySelector('#edit')
const buttonView = document.querySelector('#view')
const buttonConfirm = document.querySelector('#confirm')

const plainValues = document.querySelectorAll('.plain-value')
const inputValues = document.querySelectorAll('.input-value')

buttonEdit.addEventListener('click', function(){
    buttonEdit.style.display = "none"
    buttonView.style.display = "inline-block"
    buttonConfirm.style.display = "inline-block"

    plainValues.forEach((plainValue) => {
        plainValue.style.display = "none"
    })
    inputValues.forEach((inputValue) =>{
        inputValue.style.display = "block"
    })
})

buttonView.addEventListener('click', function(){
    buttonEdit.style.display = "inline-block"
    buttonView.style.display = "none"
    buttonConfirm.style.display = "none"

    plainValues.forEach((plainValue) => {
        plainValue.style.display = "block"
    })
    inputValues.forEach((inputValue) =>{
        inputValue.style.display = "none"
    })
})


const re_email = document.getElementById('re_email');
re_email.addEventListener('keydown', matchedEmail)
function matchedEmail(checked) {
    const email = document.getElementById('email');
    if (this.value === email.value) {
        this.classList.remove('NotMatched')
        this.classList.add('matched')
        email.classList.add('matched')
    } else {
        this.classList.add('NotMatched')
    }
}



///////////////////////////clear fields
clearFields("fistName")
clearFields("lastName")
clearFields("email")
clearFields("re_email")
clearFields("password")
clearFields("re_password")
function clearFields(id) {
    const field = document.getElementById(id)
    if (field.type !== 'text') {
        field.Clear;
    } else {
        field.value = ' ';
    }
}

(function () {
    const LoginForm = document.getElementsByName('auth_login_form')[0]
    const btnLogin = document.getElementById('auth_login_btn')
    const textError = document.getElementById('textError')

    async function Login(form, setErorr) {
        try {
            await fetch('/api/login', {
                method: "POST",
                body: new FormData(form)
            }).then(r => r.json()).then(r => {
                if (r.token) {
                    localStorage.setItem('token', r.token)
                    window.location.replace("/")
                }
                else {
                    throw r.errors
                }
            })
        } catch (error) {
            setErorr.textContent = error.name ?? '' + '   ' + error.surname ?? '' + '   ' + error.error ?? ''
        }
    }
    btnLogin.addEventListener('click', () => Login(LoginForm, textError))
}())

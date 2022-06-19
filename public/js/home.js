(async function () {
    const Users = document.querySelector('.Users')
    try {
        await fetch('/api/get-user', {
            method: "GET",
            headers: {
                "Authorization": 'Bearer ' + localStorage.getItem('token')
            }
        }).then(r => {
            if (r.ok) {
                return r.json()
            }
            throw "ошибка"
        }).then(r => {
            r.data.map(user => {
                Users.innerHTML += `<p>имя - ${user.name}  фамилия - ${user.surname}</p>`
            })
        })
    } catch (error) {
        console.log(error)
    }
})()

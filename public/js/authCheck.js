(function () {

    fetch('/api/authcheck', {
        method: "GET",
        headers: {
            "Authorization": 'Bearer ' + localStorage.getItem('token')
        }
    }).then(r => {
        if (!r.ok) {
            window.location.replace("/login")
        }
    })
}())

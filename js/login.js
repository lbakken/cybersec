window.onload = () => {
    document.getElementById("submit").disabled = true
}

function validator() {
    console.log("Validating Inputs")
    let username = document.getElementById("username")
    let password = document.getElementById("password")

    if (username.value === "") {
        console.log("Username Null")
        document.getElementById("submit").disabled = true
        return false
    }

    if (password.value === "") {
        console.log("Password Null")
        document.getElementById("submit").disabled = true
        return false
    }

    console.log("Inputs Validated")
    document.getElementById("submit").disabled = false
    return true
}
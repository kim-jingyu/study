const hiddenClass = "hidden";
const loginForm = document.querySelector("form");

loginForm.addEventListener("submit", e => {
    e.preventDefault();

    const userId = loginForm.querySelector("#inputUserId").value;
    const userPw = loginForm.querySelector("#inputPassword").value;
    const errorMsg = document.querySelector("#errorMsg");

    const url = `/loginProcess.php?userId=${userId}&${userPw}`;

    fetch(url)
        .then((resp) => resp.json())
        .then((data) => {
            const resultData = data.result;
            
            if (resultData == 'ok') {
                errorMsg.classList.add(hiddenClass);
            } else {
                errorMsg.classList.remove(hiddenClass);
            }
        })
})
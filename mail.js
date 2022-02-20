const form = document.querySelector("form#contact");
// statusTxt = form.querySelector(".button-area span");
form.onsubmit = (e) => {
    e.preventDefault();
    // statusTxt.style.color = "#0D6EFD";
    // statusTxt.style.display = "block";
    // statusTxt.innerText = "Sending your message...";
    form.classList.add("disabled");
    let xhr = new XMLHttpRequest();
    console.log(xhr);
    console.log(xhr.readyState);
    console.log(xhr.status);
    xhr.open("POST", "message.php", true);
    xhr.onload = () => {

        console.log(xhr.readyState);
        console.log(xhr.status);
        if (xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.response;
            // console.log(response.indexof("required"));
            if (response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1) {
                // statusTxt.style.color = "red";
                console.log("eror");
            } else {
                form.reset();
                // setTimeout(() => {
                //     statusTxt.style.display = "none";
                // }, 3000);
            }
            // statusTxt.innerText = response;
            form.classList.remove("disabled");
        }
    }
    let formData = new FormData(form);
    console.log(formData);
    xhr.send(formData);
}
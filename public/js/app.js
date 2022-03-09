let captcha = new Array();

function generateCaptcha() {
    const activeCaptcha = document.getElementById("captcha");
    for (i = 0; i < 5; i++) {
        captcha[i] = String.fromCharCode(Math.floor(Math.random() * 26 + 65));
    }
    textCaptcha = captcha.join("");
    activeCaptcha.innerHTML = `${textCaptcha}`;
}

function validateCaptcha() {
    const errorMsg = document.getElementById("errorMsg");
    const theCaptcha = document.getElementById("theCaptcha");
    
    thecaptcha = theCaptcha.value.toUpperCase();
    let validateCaptcha = 0;
    for (var z = 0; z < 5; z++) {
      if (thecaptcha.charAt(z) != captcha[z]) {
        validateCaptcha++;
      }
    }
    if (thecaptcha == "") {
      errorMsg.innerHTML = "Silahkan isi Captcha terlebih dahulu";
    } else if (validateCaptcha > 0 || thecaptcha.length > 5) {
      errorMsg.innerHTML = "Jawaban Captcha salah";
    } else {
        document.getElementById("form_regis").submit(); /*disini kuganti jadi apabila berhasil dia bakal subtmit form */
    }
  }

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


function toggle(source) {
  checkboxes = document.getElementsByName('checkboxBarang');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

function minus(id, harga){
  textJumlahBarang1 = document.getElementById("jumlahBarangKeranjang1");
  textJumlahBarang2 = document.getElementById("jumlahBarangKeranjang2");
  inputJumlah = document.getElementById(id.id);
  value = parseInt(inputJumlah.value);
  console.log(harga);
  if(value > 1){
    inputJumlah.value = value - 1;
    spanTotal1 = document.getElementById("totalHarga1");
    spanTotal2 = document.getElementById("totalHarga2");
    stringTotal = spanTotal1.innerText;
    newTotal = stringTotal.split('.').join("");
    hasil = parseInt(newTotal) - harga ;
    jumlahBarang = parseInt(textJumlahBarang2.innerText);
    jumlahBarang = jumlahBarang - 1;
    spanTotal1.innerHTML = hasil.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    spanTotal2.innerHTML = hasil.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    textJumlahBarang1.innerHTML = "Total Harga (" + jumlahBarang + " Barang)";
    textJumlahBarang2.innerHTML = jumlahBarang;
  }
}

function plus(id, harga){
  textJumlahBarang1 = document.getElementById("jumlahBarangKeranjang1");
  textJumlahBarang2 = document.getElementById("jumlahBarangKeranjang2");
  inputJumlah = document.getElementById(id.id);
  value = parseInt(inputJumlah.value);
  inputJumlah.value = value + 1;
  spanTotal1 = document.getElementById("totalHarga1");
  spanTotal2 = document.getElementById("totalHarga2");
  stringTotal = spanTotal1.innerText;
  newTotal = stringTotal.split('.').join("");
  hasil = parseInt(newTotal) + harga ;
  jumlahBarang = parseInt(textJumlahBarang2.innerText);
  jumlahBarang = jumlahBarang + 1;
  spanTotal1.innerHTML = hasil.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  spanTotal2.innerHTML = hasil.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  textJumlahBarang1.innerHTML = "Total Harga (" + jumlahBarang + " Barang)";
  textJumlahBarang2.innerHTML = jumlahBarang;
}


function check() {
    var hoTen = document.getElementById('name').value;
    var pw = document.getElementById('pw').value;
    var email = document.getElementById('email').value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    if(!filter.test(email)) {
        document.getElementById("demo").innerHTML = 'Mail khong hop le';
        return;
    }
    if(hoTen === ''){
        document.getElementById('demo').innerHTML = 'Vui lòng nhập họ tên';
        return;
    } 
    if(pw === ''){
        document.getElementById('demo').innerHTML = 'Vui lòng nhập password';
        return;
    }
    document.getElementById("demo").innerHTML = 'Đăng ký thành công!';
}

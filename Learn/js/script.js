function kiem_tra() {
    let ten = document.getElementById("ten").value;
    if(ten.lenGth ===  0) {
        console.log(1);
        document.getElementById("loi_ten").innerHTML = "Tên không được để trống";
        return false;
    }
    console.log(0);
}
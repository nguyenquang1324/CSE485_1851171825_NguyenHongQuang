<?php
require_once "configs/conect_profile.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form xét tuyển</title>
<!--    bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>
<body>

<header class="header">
    <center>
    <div class="container">
        <div class="header__logo">
            <h1><a href="#"><img src="images/logo.jpg" width="547" height="82"></a></h1>
        </div>
    </div>
    <center
</header>

<div style="margin-top: 30px;" class="input-group-prepend">
<!--NAV-BAR-->
<div class="col-md-2" style="margin-top: 4%;">
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-primary input-group"><a href="#" style="color: white"><i class="fas fa-book-open"></i> Điều kiện xét tuyển</a></button>
    </div>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-info input-group"><a  href="#" style="color: white">Ngành xét tuyển</a></button>
    </div>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-danger input-group"><a  href="#" style="color: white"><i class="fad fa-pen"></i> Hồ sơ và cách đăng ký</a></button>
    </div>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-danger input-group"><a  href="#" style="color: white">Đăng ký xét tuyển</a></button>
    </div>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-warning input-group"><a  href="#" style="color: black">Đăng ký xét tuyển</a></button>
    </div>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-danger input-group" style="background-color: rebeccapurple"><a href="#" style="color: white">1 cái gì đó chưa nhìn ra</a></button>
    </div>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-success input-group"><a  href="#" style="color: white">1 cái gì đó nhìn chưa ra</a></button></div>
</div>
<!--END NAV-BAR-->

<!--FORM-->

<div class="col-md-8">
    <form method="post" name="form_xet_tuyen" enctype="multipart/form-data">
        <div class="input-group-prepend">
        <div class="col-md-12">
            <h1 style="text-align:center">Thông tin hồ sơ</h1>
        </div>
    </div>
        <div class="nhap-thong-tin">
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                <input type="text" name="fullname" placeholder="Nhập tên" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Giới tính</span>
                <select name="gender" class="form-control">
                    <option value="0">-Chọn-</option>
                    <option value="nam">Nam</option>
                    <option value="nữ">Nữ</option>
                </select>
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Ngày sinh</span>
                <input type="date" name="birthday" placeholder="Nhập ngày tháng năm sinh" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1" >Dân tộc</span>
            <input type="text" name="nation" placeholder="Nhập tên" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1" >Tôn giáo</span>
            <input type="text" name="religion" placeholder="Nhập tên" class="form-control">
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Nơi sinh</span>
                <select name="placeofbirth" class="form-control">
                    <option value="0">-Chọn tỉnh-</option>
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    <option value="Cần Thơ">Cần Thơ</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Hải Phòng">Hải Phòng</option>
                    <option value="An Giang">An Giang</option>
                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                    <option value="Bắc Giang">Bắc Giang</option>
                    <option value="Bắc Kạn">Bắc Kạn</option>
                    <option value="Bạc Liêu">Bạc Liêu</option>
                    <option value="Bắc Ninh">Bắc Ninh</option>
                    <option value="Bến Tre">Bến Tre</option>
                    <option value="Bình Định">Bình Định</option>
                    <option value="Bình Dương">Bình Dương</option>
                    <option value="Bình Phước">Bình Phước</option>
                    <option value="Bình Thuận">Bình Thuận</option>
                    <option value="Cà Mau">Cà Mau</option>
                    <option value="Cao Bằng">Cao Bằng</option>
                    <option value="Đắk Lắk">Đắk Lắk</option>
                    <option value="Đắk Nông">Đắk Nôngk</option>
                    <option value="Điện Biên">Điện Biên</option>
                    <option value="Đồng Nai">Đồng Nai</option>
                    <option value="Đồng Tháp">Đồng Tháp</option>
                    <option value="Gia Lai">Gia Lai</option>
                    <option value="Hà Giang">Hà Giang</option>
                    <option value="Hà Nam">Hà Nam</option>
                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                    <option value="Hải Dương">Hải Dương</option>
                    <option value="Hậu Giang">Hậu Giang</option>
                    <option value="Hòa Bình">Hòa Bình</option>
                    <option value="Hưng Yên">Hưng Yên</option>
                    <option value="Khánh Hòa">Khánh Hòa</option>
                    <option value="Kiên Giang">Kiên Giang</option>
                    <option value="Kon Tum">Kon Tum</option>
                    <option value="Lai Châu">Lai Châu</option>
                    <option value="Lâm Đồng">Lâm Đồng</option>
                    <option value="Lạng Sơn">Lạng Sơn</option>
                    <option value="Lào Cai">Lào Cai</option>
                    <option value="Long An">Long An</option>
                    <option value="Nam Định">Nam Định</option>
                    <option value="Nghệ An">Nghệ An</option>
                    <option value="Ninh Bình">Ninh Bình</option>
                    <option value="Ninh Thuận">Ninh Thuận</option>
                    <option value="Phú Thọ">Phú Thọ</option>
                    <option value="Quảng Bình">Quảng Bình</option>
                    <option value="Quảng Nam">Quảng Nam</option>
                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                    <option value="Quảng Ninh">Quảng Ninh</option>
                    <option value="Quảng Trị">Quảng Trị</option>
                    <option value="Sóc Trăng">Sóc Trăng</option>
                    <option value="Sơn La">Sơn La</option>
                    <option value="Tây Ninh">Tây Ninh</option>
                    <option value="Thái Bình">Thái Bình</option>
                    <option value="Thái Nguyên">Thái Nguyên</option>
                    <option value="Thanh Hóa">Thanh Hóa</option>
                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                    <option value="Tiền Giang">Tiền Giang</option>
                    <option value="Tuyên Quang">Tuyên Quang</option>
                    <option value="Vĩnh Long">Vĩnh Long</option>
                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                    <option value="Yên Bái">Yên Bái</option>
                    <option value="Phú Yên">Phú Yên</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Năm tốt nghiệp</span>
                <select name="graduationyear" class="form-control">
                    <option value="0">-Chọn-</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Học lực lớp 12</span>
                <select name="academicpower" class="form-control">
                    <option value="0">-Chọn-</option>
                    <option value="yếu">Yếu</option>
                    <option value="kém">Kém</option>
                    <option value="trung bình">Trung bình</option>
                    <option value="khá">Khá</option>
                    <option value="giỏi">Giỏi</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Hạnh kiểm lớp 12</span>
                <select name="conduct" class="form-control">
                    <option value="0">-Chọn-</option>
                    <option value="yếu">Yếu</option>
                    <option value="trung bình">Trung bình</option>
                    <option value="khá">Khá</option>
                    <option value="tốt">Tốt</option>
                </select>
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Số CMND/CCCD</span>
                <input type="number" name="CMT" placeholder="Số CMT" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Ngày cấp</span>
                <input type="date" name="dayranger" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Nơi cấp</span>
                <select name="issuedby" class="form-control">
                    <option value="0">-Chọn tỉnh-</option>
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    <option value="Cần Thơ">Cần Thơ</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Hải Phòng">Hải Phòng</option>
                    <option value="An Giang">An Giang</option>
                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                    <option value="Bắc Giang">Bắc Giang</option>
                    <option value="Bắc Kạn">Bắc Kạn</option>
                    <option value="Bạc Liêu">Bạc Liêu</option>
                    <option value="Bắc Ninh">Bắc Ninh</option>
                    <option value="Bến Tre">Bến Tre</option>
                    <option value="Bình Định">Bình Định</option>
                    <option value="Bình Dương">Bình Dương</option>
                    <option value="Bình Phước">Bình Phước</option>
                    <option value="Bình Thuận">Bình Thuận</option>
                    <option value="Cà Mau">Cà Mau</option>
                    <option value="Cao Bằng">Cao Bằng</option>
                    <option value="Đắk Lắk">Đắk Lắk</option>
                    <option value="Đắk Nông">Đắk Nôngk</option>
                    <option value="Điện Biên">Điện Biên</option>
                    <option value="Đồng Nai">Đồng Nai</option>
                    <option value="Đồng Tháp">Đồng Tháp</option>
                    <option value="Gia Lai">Gia Lai</option>
                    <option value="Hà Giang">Hà Giang</option>
                    <option value="Hà Nam">Hà Nam</option>
                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                    <option value="Hải Dương">Hải Dương</option>
                    <option value="Hậu Giang">Hậu Giang</option>
                    <option value="Hòa Bình">Hòa Bình</option>
                    <option value="Hưng Yên">Hưng Yên</option>
                    <option value="Khánh Hòa">Khánh Hòa</option>
                    <option value="Kiên Giang">Kiên Giang</option>
                    <option value="Kon Tum">Kon Tum</option>
                    <option value="Lai Châu">Lai Châu</option>
                    <option value="Lâm Đồng">Lâm Đồng</option>
                    <option value="Lạng Sơn">Lạng Sơn</option>
                    <option value="Lào Cai">Lào Cai</option>
                    <option value="Long An">Long An</option>
                    <option value="Nam Định">Nam Định</option>
                    <option value="Nghệ An">Nghệ An</option>
                    <option value="Ninh Bình">Ninh Bình</option>
                    <option value="Ninh Thuận">Ninh Thuận</option>
                    <option value="Phú Thọ">Phú Thọ</option>
                    <option value="Quảng Bình">Quảng Bình</option>
                    <option value="Quảng Nam">Quảng Nam</option>
                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                    <option value="Quảng Ninh">Quảng Ninh</option>
                    <option value="Quảng Trị">Quảng Trị</option>
                    <option value="Sóc Trăng">Sóc Trăng</option>
                    <option value="Sơn La">Sơn La</option>
                    <option value="Tây Ninh">Tây Ninh</option>
                    <option value="Thái Bình">Thái Bình</option>
                    <option value="Thái Nguyên">Thái Nguyên</option>
                    <option value="Thanh Hóa">Thanh Hóa</option>
                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                    <option value="Tiền Giang">Tiền Giang</option>
                    <option value="Tuyên Quang">Tuyên Quang</option>
                    <option value="Vĩnh Long">Vĩnh Long</option>
                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                    <option value="Yên Bái">Yên Bái</option>
                    <option value="Phú Yên">Phú Yên</option>
                </select>
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-12">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Hộ khẩu thường trú</span>
                <textarea class="form-control" aria-label="With textarea" placeholder="Nhập hộ khẩu thường trú" name="household"></textarea>
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-12">
                <i>Ghi rõ tên tỉnh(thành phố), huyện(quận), xã(phường) vào ô hộ khẩu thường trú</i>
                <br>
                <h5>Nơi học sinh THPT hoặc tương đương(ghi tên trường và nơi trường đóng: huyện(quận), tỉnh(thành phố):</h5>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-2"></div>
        <div class="col-md-2">Mã tỉnh</div>
        <div class="col-md-3">Tên tỉnh/TP</div>
        <div class="col-md-2">Mã trường</div>
        <div class="col-md-3">Tên trường</div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-4">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1" >Năm lớp 10</span>
            <input type="text" name="MaTinh10" class="form-control">
            </div>
        </div>
        <div class="col-md-3"><select name="city10" class="form-control">
                <option value="0">-Chọn tỉnh-</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                <option value="Cần Thơ">Cần Thơ</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="An Giang">An Giang</option>
                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                <option value="Bắc Giang">Bắc Giang</option>
                <option value="Bắc Kạn">Bắc Kạn</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Bắc Ninh">Bắc Ninh</option>
                <option value="Bến Tre">Bến Tre</option>
                <option value="Bình Định">Bình Định</option>
                <option value="Bình Dương">Bình Dương</option>
                <option value="Bình Phước">Bình Phước</option>
                <option value="Bình Thuận">Bình Thuận</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Cao Bằng">Cao Bằng</option>
                <option value="Đắk Lắk">Đắk Lắk</option>
                <option value="Đắk Nông">Đắk Nôngk</option>
                <option value="Điện Biên">Điện Biên</option>
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="Đồng Tháp">Đồng Tháp</option>
                <option value="Gia Lai">Gia Lai</option>
                <option value="Hà Giang">Hà Giang</option>
                <option value="Hà Nam">Hà Nam</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Dương">Hải Dương</option>
                <option value="Hậu Giang">Hậu Giang</option>
                <option value="Hòa Bình">Hòa Bình</option>
                <option value="Hưng Yên">Hưng Yên</option>
                <option value="Khánh Hòa">Khánh Hòa</option>
                <option value="Kiên Giang">Kiên Giang</option>
                <option value="Kon Tum">Kon Tum</option>
                <option value="Lai Châu">Lai Châu</option>
                <option value="Lâm Đồng">Lâm Đồng</option>
                <option value="Lạng Sơn">Lạng Sơn</option>
                <option value="Lào Cai">Lào Cai</option>
                <option value="Long An">Long An</option>
                <option value="Nam Định">Nam Định</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Ninh Bình">Ninh Bình</option>
                <option value="Ninh Thuận">Ninh Thuận</option>
                <option value="Phú Thọ">Phú Thọ</option>
                <option value="Quảng Bình">Quảng Bình</option>
                <option value="Quảng Nam">Quảng Nam</option>
                <option value="Quảng Ngãi">Quảng Ngãi</option>
                <option value="Quảng Ninh">Quảng Ninh</option>
                <option value="Quảng Trị">Quảng Trị</option>
                <option value="Sóc Trăng">Sóc Trăng</option>
                <option value="Sơn La">Sơn La</option>
                <option value="Tây Ninh">Tây Ninh</option>
                <option value="Thái Bình">Thái Bình</option>
                <option value="Thái Nguyên">Thái Nguyên</option>
                <option value="Thanh Hóa">Thanh Hóa</option>
                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                <option value="Tiền Giang">Tiền Giang</option>
                <option value="Tuyên Quang">Tuyên Quang</option>
                <option value="Vĩnh Long">Vĩnh Long</option>
                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                <option value="Yên Bái">Yên Bái</option>
                <option value="Phú Yên">Phú Yên</option>
            </select></div>
        <div class="col-md-2"><input type="text" name="MaTruong10" class="form-control"></div>
        <div class="col-md-3"><input type="text" name="TenTruong10" class="form-control"></div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Năm lớp 11</span>
                <input type="text" name="MaTinh11" class="form-control">
            </div>
        </div>
        <div class="col-md-3"><select name="city11" class="form-control">
                <option value="0">-Chọn tỉnh-</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                <option value="Cần Thơ">Cần Thơ</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="An Giang">An Giang</option>
                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                <option value="Bắc Giang">Bắc Giang</option>
                <option value="Bắc Kạn">Bắc Kạn</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Bắc Ninh">Bắc Ninh</option>
                <option value="Bến Tre">Bến Tre</option>
                <option value="Bình Định">Bình Định</option>
                <option value="Bình Dương">Bình Dương</option>
                <option value="Bình Phước">Bình Phước</option>
                <option value="Bình Thuận">Bình Thuận</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Cao Bằng">Cao Bằng</option>
                <option value="Đắk Lắk">Đắk Lắk</option>
                <option value="Đắk Nông">Đắk Nôngk</option>
                <option value="Điện Biên">Điện Biên</option>
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="Đồng Tháp">Đồng Tháp</option>
                <option value="Gia Lai">Gia Lai</option>
                <option value="Hà Giang">Hà Giang</option>
                <option value="Hà Nam">Hà Nam</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Dương">Hải Dương</option>
                <option value="Hậu Giang">Hậu Giang</option>
                <option value="Hòa Bình">Hòa Bình</option>
                <option value="Hưng Yên">Hưng Yên</option>
                <option value="Khánh Hòa">Khánh Hòa</option>
                <option value="Kiên Giang">Kiên Giang</option>
                <option value="Kon Tum">Kon Tum</option>
                <option value="Lai Châu">Lai Châu</option>
                <option value="Lâm Đồng">Lâm Đồng</option>
                <option value="Lạng Sơn">Lạng Sơn</option>
                <option value="Lào Cai">Lào Cai</option>
                <option value="Long An">Long An</option>
                <option value="Nam Định">Nam Định</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Ninh Bình">Ninh Bình</option>
                <option value="Ninh Thuận">Ninh Thuận</option>
                <option value="Phú Thọ">Phú Thọ</option>
                <option value="Quảng Bình">Quảng Bình</option>
                <option value="Quảng Nam">Quảng Nam</option>
                <option value="Quảng Ngãi">Quảng Ngãi</option>
                <option value="Quảng Ninh">Quảng Ninh</option>
                <option value="Quảng Trị">Quảng Trị</option>
                <option value="Sóc Trăng">Sóc Trăng</option>
                <option value="Sơn La">Sơn La</option>
                <option value="Tây Ninh">Tây Ninh</option>
                <option value="Thái Bình">Thái Bình</option>
                <option value="Thái Nguyên">Thái Nguyên</option>
                <option value="Thanh Hóa">Thanh Hóa</option>
                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                <option value="Tiền Giang">Tiền Giang</option>
                <option value="Tuyên Quang">Tuyên Quang</option>
                <option value="Vĩnh Long">Vĩnh Long</option>
                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                <option value="Yên Bái">Yên Bái</option>
                <option value="Phú Yên">Phú Yên</option>
            </select></div>
        <div class="col-md-2"><input type="text" name="MaTruong11" class="form-control"></div>
        <div class="col-md-3"><input type="text" name="TenTruong11" class="form-control"></div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" >Năm lớp 12</span>
                <input type="text" name="MaTinh12" class="form-control">
            </div>
        </div>
        <div class="col-md-3"><select name="city12" class="form-control">
                <option value="0">-Chọn tỉnh-</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                <option value="Cần Thơ">Cần Thơ</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="An Giang">An Giang</option>
                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                <option value="Bắc Giang">Bắc Giang</option>
                <option value="Bắc Kạn">Bắc Kạn</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Bắc Ninh">Bắc Ninh</option>
                <option value="Bến Tre">Bến Tre</option>
                <option value="Bình Định">Bình Định</option>
                <option value="Bình Dương">Bình Dương</option>
                <option value="Bình Phước">Bình Phước</option>
                <option value="Bình Thuận">Bình Thuận</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Cao Bằng">Cao Bằng</option>
                <option value="Đắk Lắk">Đắk Lắk</option>
                <option value="Đắk Nông">Đắk Nôngk</option>
                <option value="Điện Biên">Điện Biên</option>
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="Đồng Tháp">Đồng Tháp</option>
                <option value="Gia Lai">Gia Lai</option>
                <option value="Hà Giang">Hà Giang</option>
                <option value="Hà Nam">Hà Nam</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Dương">Hải Dương</option>
                <option value="Hậu Giang">Hậu Giang</option>
                <option value="Hòa Bình">Hòa Bình</option>
                <option value="Hưng Yên">Hưng Yên</option>
                <option value="Khánh Hòa">Khánh Hòa</option>
                <option value="Kiên Giang">Kiên Giang</option>
                <option value="Kon Tum">Kon Tum</option>
                <option value="Lai Châu">Lai Châu</option>
                <option value="Lâm Đồng">Lâm Đồng</option>
                <option value="Lạng Sơn">Lạng Sơn</option>
                <option value="Lào Cai">Lào Cai</option>
                <option value="Long An">Long An</option>
                <option value="Nam Định">Nam Định</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Ninh Bình">Ninh Bình</option>
                <option value="Ninh Thuận">Ninh Thuận</option>
                <option value="Phú Thọ">Phú Thọ</option>
                <option value="Quảng Bình">Quảng Bình</option>
                <option value="Quảng Nam">Quảng Nam</option>
                <option value="Quảng Ngãi">Quảng Ngãi</option>
                <option value="Quảng Ninh">Quảng Ninh</option>
                <option value="Quảng Trị">Quảng Trị</option>
                <option value="Sóc Trăng">Sóc Trăng</option>
                <option value="Sơn La">Sơn La</option>
                <option value="Tây Ninh">Tây Ninh</option>
                <option value="Thái Bình">Thái Bình</option>
                <option value="Thái Nguyên">Thái Nguyên</option>
                <option value="Thanh Hóa">Thanh Hóa</option>
                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                <option value="Tiền Giang">Tiền Giang</option>
                <option value="Tuyên Quang">Tuyên Quang</option>
                <option value="Vĩnh Long">Vĩnh Long</option>
                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                <option value="Yên Bái">Yên Bái</option>
                <option value="Phú Yên">Phú Yên</option>
            </select></div>
        <div class="col-md-2"><input type="text" name="MaTruong12" class="form-control"></div>
        <div class="col-md-3"><input type="text" name="TenTruong12" class="form-control"></div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-10">
            <div class="input-group-prepend">
                <span>Đối tượng tuyển sinh(thuộc đối tượng nào thì chọn đối tượng bên phải)</span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="input-group-prepend">
                <select name="object" class="form-control">
                    <option value="0">-Chọn-</option>
                    <option value="UT1">Nhóm ưu tiên 1</option>
                    <option value="UT2">Nhóm ưu tiên 2</option>
                </select>
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-10">
            <div class="input-group-prepend">
                <span>Khu vực ưu tiên tuyển sinh(Thuộc khu vực nào thì chọn ký hiệu khu vục (KV1, KV2-NT ,KV2 ,KV3) vào ô khu vưc ưu tiên</span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="input-group-prepend">
                <select name="area" class="form-control">
                    <option value="0">-Chọn-</option>
                    <option value="KV1">KV1</option>
                    <option value="KV2-NT">KV2-NT</option>
                    <option value="KV2">KV2</option>
                    <option value="KV3">KV3</option>
                </select>
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-12">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Địa chỉ liên hệ</span>
                <input type="text" name="address" placeholder="Nhập địa chỉ" class="form-control">
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Điện thoại thí sinh</span>
                <input type="number" name="SDTThiSinh" placeholder="Nhập số điện thoại" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Điện thoại phụ huynh</span>
                <input type="number" name="SDTPhuHuynh" placeholder="Nhập số điện thoại" class="form-control">
            </div>
        </div>
    </div>
            <div class="input-group-prepend" style="margin-bottom: 10px;">
                <div class="col-md-12">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" >Ảnh hồ sơ</span>
                    <input type="file" name="image" class="form-control">
                    </div>

                </div>
            </div>
        </div>
        <div class="slect-hinh-thuc ">
            <div class="input-group-prepend" style="margin:10px 0px 20px 0px; ">
            <div class="col-md-12">
                <h1 style="text-align: center">Thông tin đăng ký</h1>
                <span>Sau khi đọc và tìm hiểu rõ các quy định và tiêu chí về chỉ tiêu xét tuyển
            của nhà trường, tôi đồng ý xét tuyển học bạ vào đại học trình độ như sau
            (Chọn phương thức xét tuyển)</span>
            </div>
        </div>
            <div class="input-group-prepend" style="margin-bottom: 20px">
            <div class="col-md-12">
                <div class="input-group-prepend">
                    <input type="radio" name="admission" value="class12"> Tuyển bằng tổng điểm trung bình lớp 12 theo tổ hợp 3 môn
                </div>
            </div>
        </div>
            <div class="input-group-prepend" style="margin-bottom: 20px">
            <div class="col-md-12">
                <div class="input-group-prepend">
                    <input type="radio" name="admission" value="3semester"> Tuyển bằng tổng điểm trung bình 3 học kỳ(HK1,HK2 năm lớp 11 và HK1 năm lớp 12)
                </div>
            </div>
        </div>
            <div class="input-group-prepend" style="margin-bottom: 20px">
            <div class="col-md-12">
                <div class="input-group-prepend">
                    <input type="radio" name="admission" value="bothmethods">
                    Cả 2 hình thức trên
                </div>
            </div>
        </div>
        </div>
        <div class="guithongtin">
            <div class="input-group-prepend">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <input type="submit" value="GỬI HỒ SƠ" name="submit_profile" class="btn btn-success form-control">
                </div>
                <div class="col-md-3"></div>
            </div>

        </div>
    </form>

    <?php
    require_once "model/validate.php";
    ?>
</div>
</div>
</body>
</html>

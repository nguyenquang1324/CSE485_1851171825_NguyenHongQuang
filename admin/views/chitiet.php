<?php
session_start();
require_once "../configs/conect_profile.php";
if (!isset($_SESSION['success'])) {
    header("location: login.php");
    exit();
}
$id=$_GET['id'];
require_once "../configs/conect_profile.php";
$user=selectforid($id);

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
                <h1><a href="../../Trang%20chủ%20TLU/index.html"><img src="../images/logo.jpg" width="547" height="82"></a></h1>
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
        <form method="post" name="form_xet_tuyen" >
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
                            <input type="text" name="fullname" placeholder="Nhập tên" class="form-control" value="<?php echo $user['fullname']; ?>" disabled="disable">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Giới tính</span>
                            <select name="gender" class="form-control">
                                <option value="0"><?php echo $user['gender']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Ngày sinh</span>
                            <input type="date" name="birthday" placeholder="Nhập ngày tháng năm sinh"  class="form-control" value="<?php echo $user['birthday']; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Dân tộc</span>
                            <input type="text" name="nation" placeholder="Nhập tên" class="form-control" value="<?php echo $user['nation']; ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Tôn giáo</span>
                            <input type="text" name="religion" placeholder="Nhập tên" class="form-control" value="<?php echo $user['religion']; ?>">
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Nơi sinh</span>
                            <select name="placeofbirth" class="form-control">
                                <option value="0"><?php echo $user['placeofbirth']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Năm tốt nghiệp</span>
                            <select name="graduationyear" class="form-control">
                                <option value="0"><?php echo $user['graduationyear']; ?></option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Học lực lớp 12</span>
                            <select name="academicpower" class="form-control">
                                <option value="0"><?php echo $user['academicpower']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Hạnh kiểm lớp 12</span>
                            <select name="conduct" class="form-control">
                                <option value="0"><?php echo $user['conduct']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Số CMND/CCCD</span>
                            <input type="number" name="CMT" placeholder="Số CMT" class="form-control" value="<?php echo $user['CMT']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Ngày cấp</span>
                            <input type="date" name="dayranger" class="form-control" value="<?php echo $user['dayranger']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Nơi cấp</span>
                            <select name="issuedby" class="form-control">
                                <option value="0"><?php echo $user['issuedby']; ?></option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Hộ khẩu thường trú</span>
                            <textarea class="form-control" aria-label="With textarea" placeholder="Nhập hộ khẩu thường trú" name="household"><?php echo $user['household']; ?></textarea>
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
                            <input type="text" name="MaTinh10" class="form-control" value="<?php echo $user['MaTinh10']; ?>">
                        </div>
                    </div>
                    <div class="col-md-3"><select name="city10" class="form-control">
                            <option value="0"><?php echo $user['city10']; ?></option>

                        </select></div>
                    <div class="col-md-2"><input type="text" name="MaTruong10" class="form-control" value="<?php echo $user['MaTruong10']; ?>"></div>
                    <div class="col-md-3"><input type="text" name="TenTruong10" class="form-control" value="<?php echo $user['TenTruong10']; ?>"></div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Năm lớp 11</span>
                            <input type="text" name="MaTinh11" class="form-control" value="<?php echo $user['MaTinh11']; ?>">
                        </div>
                    </div>
                    <div class="col-md-3"><select name="city11" class="form-control">
                            <option value="0"><?php echo $user['city11']; ?></option>

                        </select></div>
                    <div class="col-md-2"><input type="text" name="MaTruong11" class="form-control" value="<?php echo $user['MaTruong11']; ?>"></div>
                    <div class="col-md-3"><input type="text" name="TenTruong11" class="form-control" value="<?php echo $user['TenTruong11']; ?>"></div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Năm lớp 12</span>
                            <input type="text" name="MaTinh12" class="form-control" value="<?php echo $user['MaTinh12']; ?>">
                        </div>
                    </div>
                    <div class="col-md-3"><select name="city12" class="form-control">
                            <option value="0"><?php echo $user['city12']; ?></option>

                        </select></div>
                    <div class="col-md-2"><input type="text" name="MaTruong12" class="form-control" value="<?php echo $user['MaTruong12']; ?>"></div>
                    <div class="col-md-3"><input type="text" name="TenTruong12" class="form-control" <?php echo $user['TenTruong12']; ?>></div>
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
                                <option value="0"><?php echo $user['object']; ?></option>
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
                                <option value="0"><?php echo $user['area']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Địa chỉ liên hệ</span>
                            <input type="text" name="address" placeholder="Nhập địa chỉ" class="form-control" value="<?php echo $user['address']; ?>">
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Điện thoại thí sinh</span>
                            <input type="number" name="SDTThiSinh" placeholder="Nhập số điện thoại" class="form-control" value="<?php echo $user['SDTThiSinh']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Điện thoại phụ huynh</span>
                            <input type="number" name="SDTPhuHuynh" placeholder="Nhập số điện thoại" class="form-control" value="<?php echo $user['SDTPhuHuynh']; ?>">
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Ảnh hồ sơ</span>
                            <img src="../../Xét%20tuyển/model/uploads/<?php echo $user['image'];?>" width="80%" height="300px;">
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
                        <button class="btn btn-success form-control"><a href="../index.php">Quay lại trang quản lý</a></button>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
</html>


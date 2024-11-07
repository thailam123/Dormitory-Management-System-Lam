<?php
include_once 'connection.php';
if (count($_POST) > 0) {
  mysqli_query($conn, "UPDATE rent_fee set Room_Number='" . $_POST['Room_Number'] . "', gia_thue_theo_thang='" . $_POST['gia_thue_theo_thang'] . "', ky_han_thue='" . $_POST['ky_han_thue'] . "', ngay_bat_dau_thue='" . $_POST['ngay_bat_dau_thue'] . "' ,ngay_ket_thuc_thue='" . $_POST['ngay_ket_thuc_thue'] . "' ,tien_dien='" . $_POST['tien_dien'] . "' ,tien_nuoc='" . $_POST['tien_nuoc'] . "' ,tien_mang='" . $_POST['tien_mang'] . "' ,trang_thai_thanh_toan='" . $_POST['trang_thai_thanh_toan'] . "' WHERE Room_Number='" . $_POST['Room_Number'] . "'");
  include "DispRent.php";
}
$result = mysqli_query($conn, "SELECT * FROM rent_fee WHERE Room_Number='" . $_GET['Room_Number'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
  <title>Update Rent Data</title>
  <style>
    body {
      background-image: url(../images/sea2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    .sec {
      margin: 50px 500px;
      align-items: center;
      line-height: 30px;
    }
  </style>
</head>

<body>
  <form name="frmUser" method="post" action="">
    <div><?php if (isset($message)) {
      echo $message;
    } ?>
    </div>
    <section class="sec">
      Số phòng: <br>
      <input style="width: 50%; height:30px; " type="hidden" name="Room_Number" class="txtField"
        value="<?php echo $row['Room_Number']; ?>">
      <input style="width: 50%; height:30x; " type="number" name="Room_Number"
        value="<?php echo $row['Room_Number']; ?>">
      <br>
      Giá thuê theo tháng: <br>
      <input style="width: 50%; height:30px; " type="number" name="gia_thue_theo_thang" class="txtField"
        value="<?php echo $row['gia_thue_theo_thang']; ?>">
      <br>
      Kỳ hạn thuê:<br>
      <input style="width: 50%; height:30px; " type="text" name="ky_han_thue" class="txtField"
        value="<?php echo $row['ky_han_thue']; ?>">
      <br>
      Ngày bắt đầu thuê:<br>
      <input style="width: 50%; height:30px; " type="text" name="ngay_bat_dau_thue" class="txtField"
        value="<?php echo $row['ngay_bat_dau_thue']; ?>">
      <br>
      Ngày kết thúc thuê:<br>
      <input style="width: 50%; height:30px; " type="text" name="ngay_ket_thuc_thue" class="txtField"
        value="<?php echo $row['ngay_ket_thuc_thue']; ?>">
      <br>
      Tiền điện:<br>
      <input style="width: 50%; height:30px; " type="number" name="tien_dien" class="txtField"
        value="<?php echo $row['tien_dien']; ?>">
      <br>
      Tiền nước:<br>
      <input style="width: 50%; height:30px; " type="number" name="tien_nuoc" class="txtField"
        value="<?php echo $row['tien_nuoc']; ?>">
      <br>
      Tiền mạng:<br>
      <input style="width: 50%; height:30px; " type="number" name="tien_mang" class="txtField"
        value="<?php echo $row['tien_mang']; ?>">
      <br>
      Trạng thái thanh toán:<br>
      <input style="width: 50%; height:30px; " type="text" name="trang_thai_thanh_toan" class="txtField"
        value="<?php echo $row['trang_thai_thanh_toan']; ?>">
      <br>

      <!-- <button>submit</button> -->
      <input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit"
        class="buttom">
    </section>

  </form>
</body>

</html>
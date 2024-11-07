<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-image: url(../images/sea2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .tdr {
            text-align: center;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            margin-top: 60px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .table2 {
            margin-top: 70px;

        }

        #delete {
            background-color: #f44336;
            color: black;
            border-radius: 9px 9px;

        }

        #link1 {
            color: black;
            text-decoration: none;
            font-size: 15px;
        }

        #update {
            background-color: blue;
            color: black;
            border-radius: 9px 9px;
        }
    </style>
</head>

<body bgcolor="lightblue">
    <table align="center" class="table2" border="3px solid black" style="width:1000px; line-height:40px;">
        <tr>
            <th colspan="9">
                <h2>Rent fee Record</h2>
            </th>
        </tr>

        <th> Số phòng </th>
        <th> Giá thuê theo tháng </th>
        <th> Kỳ hạn thuê </th>
        <th> Ngày bắt đầu thuê </th>
        <th> Ngày kết thúc thuê </th>
        <th> Tiền điện </th>
        <th> Tiền nước </th>
        <th> Tiền mạng</th>
        <th> Trạng thái thanh toán</th>

        </tr>
        <?php
        include 'connection.php';
        $sql = "select * from rent_fee ";
        $query = mysqli_query($conn, $sql);
        while ($row1 = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td class="tdr"><?php echo $row1['Room_Number']; ?></td>
                <td class="tdr"><?php echo $row1['gia_thue_theo_thang']; ?></td>
                <td class="tdr"><?php echo $row1['ky_han_thue']; ?></td>
                <td class="tdr"><?php echo $row1['ngay_bat_dau_thue']; ?></td>
                <td class="tdr"><?php echo $row1['ngay_ket_thuc_thue']; ?></td>
                <td class="tdr"><?php echo $row1['tien_dien']; ?></td>
                <td class="tdr"><?php echo $row1['tien_nuoc']; ?></td>
                <td class="tdr"><?php echo $row1['tien_mang']; ?></td>
                <td class="tdr"><?php echo $row1['trang_thai_thanh_toan']; ?></td>

                <td style="width: 140px;">
                    <button id="delete"><a href="Delete.php?Room_Number=<?php echo $row1["Room_Number"]; ?>"
                            id="link1">Delete</a></button>
                    <button id="update">
                        <a href="Update.php?Room_Number=<?php echo $row1["Room_Number"]; ?>" id="link1"> Update</a>
                    </button>


                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <center>

        <button class="button"> <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
    </center>
</body>

</html>
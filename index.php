<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mừng Đại lễ Quốc Khánh 02/09 – TIỆC ĐỒNG GIÁ 78K</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="shortcut icon"
      href="./assets/images/logo-favicon.jpg"
      type="image/x-icon"
    />
  </head>
  <body>
    <?php
      if (isset($_POST["submitform"])){
        require 'handle/logic-form.php';
      }
      if (isset($_POST["submitform-popup"])){
        require 'handle/logic-popup-form.php';
      }
    
    ?>
    <div class="wrapper">
      <div class="container">
        <div class="content">
          <!-- Banner -->
          <div class="banner-header">
            <img src="./assets/images/banner-header.jpg" alt="" />
          </div>
          <!-- Content khuyến mãi -->
          <div class="content-body">
            <div class="service-content">
              <h3 class="service-content--title">
                Mừng Đại lễ Quốc Khánh 02/09 ĐỒNG GIÁ 78K
              </h3>
              <div class="service-content--info">
                <h2 class="service-content--price">CHỈ VỚI 78.000Đ</h2>
                <p>
                  Chị em sẽ được phục hồi làn da, về lại vóc dáng nuột nà mà
                  không tốn nhiều công sức với 1 trong 8 dịch vụ cao cấp từ Ngọc
                  Dung:
                </p>
              </div>
              <div class="service-content--list">
                <div
                  class="service-content--custom"
                  style="transform: translateX(0px)"
                >
                  <div class="service-content--items" style="opacity: 1;">
                    <div class="service-content--item">
                      <img
                        src="./assets/images/Laser-Fractional-Plus.png"
                        alt=""
                      />
                      <p>
                        <strong>Laser Fractional Plus: </strong>Dứt điểm nám/
                        Tàn nhang/ Sẹo rỗ.
                      </p>
                    </div>
                    <div class="service-content--item">
                      <img src="./assets/images/IPAC-laser.png" alt="" />
                      <p><strong>IPAC laser:</strong> Xóa sổ thâm quầng mắt.</p>
                    </div>
                    <div class="service-content--item">
                      <img src="./assets/images/Super-Hifu.png" alt="" />
                      <p>
                        <strong>Super Hifu: </strong>Trẻ hóa xóa nhăn, gia tăng
                        tuổi trẻ.
                      </p>
                    </div>
                    <div class="service-content--item">
                      <img src="./assets/images/Bio-Gold-24K.png" alt="" />
                      <p>
                        <strong>Bio Gold 24K:</strong> Tái sinh làn da tươi trẻ,
                        sáng mịn.
                      </p>
                    </div>
                  </div>
                  <div class="service-content--items" style="opacity: 0;">
                    <div class="service-content--item">
                      <img src="./assets/images/New E-Light.png" alt="" />
                      <p>
                        <strong>New E-Light:</strong> Triệt lông tận gốc, không
                        lo mọc lại.
                      </p>
                    </div>
                    <div class="service-content--item">
                      <img src="./assets/images/IPAC-laser.png" alt="" />
                      <p>
                        <strong>Laser 2023: </strong> Xóa thâm nách/ Thâm mông/
                        Thâm bẹn.
                      </p>
                    </div>
                    <div class="service-content--item">
                      <img src="./assets/images/Super-Hifu.png" alt="" />
                      <p>
                        <strong>Điện di tế bào gốc: </strong>Da căng trắng,
                        không còn lão hóa.
                      </p>
                    </div>
                    <div class="service-content--item">
                      <img src="./assets/images/Bio-Gold-24K.png" alt="" />
                      <p>
                        <strong>Giảm mỡ Exilis 720:</strong> Hủy mỡ toàn thân,
                        dáng thon đúng chuẩn.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="dots">
                  <div class="dot active" id="left"></div>
                  <div class="dot" id="right"></div>
                </div>
              </div>
              <div class="service-content--other">
                <p class="special">
                  Đặc biệt: Tặng ngay 1 lần đo sức khỏe làn da cho chị em nào
                  đăng ký sớm nhất
                </p>
                <span> Chị em chốt ngay đừng bỏ lỡ!</span>
              </div>
              <div class="service-content--btn">
                <span>Đặt lịch ngay</span>
              </div>
            </div>
            <!-- Form đăng ký -->
            <div class="form-content">
              <form action="index.php" method="post" class="form">
                <div class="form-title">đặt lịch nhận ưu đãi</div>
                <div class="form-content">
                  <div class="form-content--input">
                    <input
                      type="text"
                      name="name"
                      id="name"
                      class="input-content"
                      placeholder="Họ và Tên"
                      required
                    />
                    <span class="noti" id="name"></span>
                  </div>
                  <div class="form-content--input">
                    <div class="form-input">
                      <input
                        type="text"
                        name="phone"
                        id="phone"
                        class="input-content"
                        placeholder="Số điện thoại"
                        required
                      />
                      <span class="noti" id="phone"></span>
                    </div>
                    <div class="form-input">
                      <input
                        type="text"
                        name="email"
                        id="email"
                        class="input-content"
                        placeholder="Email"
                        required
                      />
                      <span class="noti" id="email"></span>
                    </div>
                  </div>
                  <div class="form-content--input">
                    <select
                      name="chi-nhanh"
                      id="chi-nhanh"
                      class="select-form"
                      required
                    >
                      <option value="" class="option-form--hidden">
                        Chị chọn chi nhánh gần nhất ở đây ạ.
                      </option>
                      <option
                        class="option-form"
                        value="Trụ sở chính : 33 Nguyễn Bỉnh Khiêm, Đa Kao, Quận 1"
                      >
                        Trụ sở chính : 33 Nguyễn Bỉnh Khiêm, Đa Kao, Quận 1
                      </option>
                      <option
                        class="option-form"
                        value="HCM 1: 32-34-36 Đường 3/2, Phường 12, Quận 10, Hồ Chí Minh"
                      >
                        HCM 1: 32-34-36 Đường 3/2, Phường 12, Quận 10, Hồ Chí
                        Minh
                      </option>
                      <option
                        class="option-form"
                        value="HCM 2: 185-187 Nguyễn Thái Học Phường Phạm Ngũ Lão, Quận 1"
                      >
                        HCM 2: 185-187 Nguyễn Thái Học Phường Phạm Ngũ Lão, Quận
                        1
                      </option>
                      <option
                        class="option-form"
                        value="HCM 3: 392A Nguyễn Thị Thập, Phường Tân Quy, Quận 7"
                      >
                        HCM 3: 392A Nguyễn Thị Thập, Phường Tân Quy, Quận 7
                      </option>
                      <option
                        class="option-form"
                        value="Hà Nội 1: 106 Phố Huế, Phường Ngô Thì Nhậm, Quận Hai Bà Trưng"
                      >
                        Hà Nội 1: 106 Phố Huế, Phường Ngô Thì Nhậm, Quận Hai Bà
                        Trưng
                      </option>
                      <option
                        class="option-form"
                        value="Hà Nội 2: 65 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu Giấy"
                      >
                        Hà Nội 2: 65 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu
                        Giấy
                      </option>
                      <option
                        class="option-form"
                        value="Hà Nội 3: 8 Khúc Thừa Dụ, Phường Dịch Vọng, Quận Cầu Giấy"
                      >
                        Hà Nội 3: 8 Khúc Thừa Dụ, Phường Dịch Vọng, Quận Cầu
                        Giấy
                      </option>
                      <option
                        class="option-form"
                        value="Hải Phòng: Số 2, Lô 7B, Đường Lê Hồng Phong, Quận Ngô Quyền"
                      >
                        Hải Phòng: Số 2, Lô 7B, Đường Lê Hồng Phong, Quận Ngô
                        Quyền
                      </option>
                      <option
                        class="option-form"
                        value="Quảng Ninh: Lô A1, 15-16 Khu Monbay, Trần Quốc Nghiễn, Thành phố Hạ Long"
                      >
                        Quảng Ninh: Lô A1, 15-16 Khu Monbay, Trần Quốc Nghiễn,
                        Thành phố Hạ Long
                      </option>
                      <option
                        class="option-form"
                        value="Bình Dương: 464 Đại Lộ Bình Dương, Thành phố Thủ Dầu Một"
                      >
                        Bình Dương: 464 Đại Lộ Bình Dương, Thành phố Thủ Dầu Một
                      </option>
                      <option
                        class="option-form"
                        value="Biên Hòa: 220 Đường 30/4, Phường Thanh Bình, Thành phố Biên Hòa"
                      >
                        Biên Hòa: 220 Đường 30/4, Phường Thanh Bình, Thành phố
                        Biên Hòa
                      </option>
                      <option
                        class="option-form"
                        value="Vũng Tàu: 157 Nam Kỳ Khỏi Nghĩa, Phường 3, Thành phố Vũng Tàu"
                      >
                        Vũng Tàu: 157 Nam Kỳ Khỏi Nghĩa, Phường 3, Thành phố
                        Vũng Tàu
                      </option>
                      <option
                        class="option-form"
                        value="Cần Thơ: 234B Trần Hưng Đạo,Phường An Nghiệp, Quận Ninh Kiều"
                      >
                        Cần Thơ: 234B Trần Hưng Đạo,Phường An Nghiệp, Quận Ninh
                        Kiều
                      </option>
                      <option
                        class="option-form"
                        value="Vinh: Số 2 Trần Phú, Phường Hồng Sơn, Thành phố Vinh"
                      >
                        Vinh: Số 2 Trần Phú, Phường Hồng Sơn, Thành phố Vinh
                      </option>
                      <option
                        class="option-form"
                        value="Đà Nẵng: 95 Nguyễn Văn Linh, Phường Nam Dương, Quận Hải Châu"
                      >
                        Đà Nẵng: 95 Nguyễn Văn Linh, Phường Nam Dương, Quận Hải
                        Châu
                      </option>
                      <option
                        class="option-form"
                        value="Nha Trang: 78 Lý Thánh Tôn, Phường Phương Sài, Tp. Nha Trang"
                      >
                        Nha Trang: 78 Lý Thánh Tôn, Phường Phương Sài, Tp. Nha
                        Trang
                      </option>
                      <option
                        class="option-form"
                        value="Buôn Ma Thuột: 2-4 Ngô Quyền, Phường Thắng Lợi, Thành phố Buôn Ma Thuột"
                      >
                        Buôn Ma Thuột: 2-4 Ngô Quyền, Phường Thắng Lợi, Thành
                        phố Buôn Ma Thuột
                      </option>
                      <option
                        class="option-form"
                        value="Phan Thiết: 154 Trần Hưng Đạo, Phường Phú Thủy, Thành phố Phan Thiết"
                      >
                        Phan Thiết: 154 Trần Hưng Đạo, Phường Phú Thủy, Thành
                        phố Phan Thiết
                      </option>
                    </select>
                  </div>
                  <div class="form-content--input">
                    <select
                      name="dich-vu"
                      id="dich-vu"
                      class="select-form"
                      required
                    >
                      <option class="option-form--hidden" value="">
                        Chọn dịch vụ yêu thích
                      </option>
                      <option
                        class="option-form"
                        value="Vàng trẻ hoá tái tạo da Bio Gold 24k"
                      >
                        <p>⭐</p>
                        Vàng trẻ hoá tái tạo da Bio Gold 24k
                      </option>
                      <option
                        class="option-form"
                        value="Ủ trắng mặt tinh chất hoa anh đào Skin White"
                      >
                        <span>⭐</span> Ủ trắng mặt tinh chất hoa anh đào Skin
                        White
                      </option>
                      <option
                        class="option-form"
                        value="Giảm mỡ thần tốc công nghệ từ Mỹ"
                      >
                        <span>⭐</span> Giảm mỡ thần tốc công nghệ từ Mỹ
                      </option>
                      <option
                        class="option-form"
                        value="Căng trắng da phương pháp điện di tế bào gốc"
                      >
                        <span>⭐</span> Căng trắng da phương pháp điện di tế bào
                        gốc
                      </option>
                      <option
                        class="option-form"
                        value="Xóa nám tận gốc chỉ sau 1 liệu trình"
                      >
                        <span>⭐</span> Xóa nám tận gốc chỉ sau 1 liệu trình
                      </option>
                      <option
                        class="option-form"
                        value="Loại bỏ sẹo rỗ mọi cấp độ"
                      >
                        <span>⭐</span> Loại bỏ sẹo rỗ mọi cấp độ
                      </option>
                      <option
                        class="option-form"
                        value="Triệt sạch vi-ô-lông mọi vùng cơ thể"
                      >
                        <span>⭐</span> Triệt sạch vi-ô-lông mọi vùng cơ thể
                      </option>
                      <option
                        class="option-form"
                        value="Đánh bay thâm quầng mắt/ Thâm mông/ Thâm mô"
                      >
                        <span>⭐</span> Đánh bay thâm quầng mắt/ Thâm mông/ Thâm
                        mô
                      </option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn-signup" name="submitform">
                  <span>đặt lịch ngay</span>
                </button>
              </form>
              <?php if (isset($_SESSION['mess'])) :?>
                  <div class="mess-signup">
                    <?php  echo $_SESSION['mess'] ?>
                  </div>
                  <??>
                <?php else :?>

                <?php endif?>
              <div class="time">
                <div class="time-title">Thời gian nhận ưu đãi</div>
                <div class="time-countdown">
                  <div class="time-countdown--content">
                    <div class="set-time day">
                      <div class="number">00</div>
                    </div>
                    <div class="set-time hour">
                      <div class="number">00</div>
                    </div>
                    <div class="set-time minute">
                      <div class="number">00</div>
                    </div>
                    <div class="set-time second">
                      <div class="number">00</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="footer-logo">
              <img src="./assets/images/logo-footer.png" alt="" />
              <img src="./assets/images/confirm.png" alt="" />
            </div>

            <div class="footer-contact">
              <div class="footer-title">thời gian làm việc</div>
              <div class="footer-desc">Thứ 2 đến CN: 9:00 - 19:00</div>
              <div class="footer-title">hotline</div>
              <div class="footer-desc">*3232</div>
            </div>
            <div class="footer-info">
              <div class="footer-note">
                *Lưu ý: kết quả tùy thuộc vào cơ địa của mỗi người
              </div>
              <div class="footer-other">
                - Công ty TNHH Thẩm Mỹ Ngọc Dung - Số ĐKKD 0307935853 do Sở KHĐT
                Tp. HCM cấp ngày 20/07/2009
              </div>
              <div class="footer-copyright">
                Copyright © 2015 NGOC DUNG BEAUTY | Powered by NGOC DUNG BEAUTY
              </div>
            </div>
          </div>
        </div>
        <div class="popup">
          <div class="popup-container">
            <div class="popup-banner">
              <div class="popup-close">
                <img src="./assets/images/icon-close.svg" alt="" />
              </div>
            </div>
            <div class="popup-content">
              <div class="popup-form--container">
                <form action="" method="post" class="popup-form">
                  <div class="popup-form--content">
                    <div class="popup-form--input">
                      <input
                        type="text"
                        name="name-popup"
                        id="name-popup"
                        class="input-content"
                        placeholder="Họ và Tên"
                        required
                      />
                      <span class="noti" id="name-popup"></span>
                    </div>

                    <div class="popup-form--input">
                      <input
                        type="text"
                        name="phone-popup"
                        id="phone-popup"
                        class="input-content"
                        placeholder="Số điện thoại"
                        required
                      />
                      <span class="noti" id="phone-popup"></span>
                    </div>
                    <div class="popup-form--input">
                      <input
                        type="text"
                        name="email-popup"
                        id="email-popup"
                        class="input-content"
                        placeholder="Email"
                        required
                      />
                      <span class="noti" id="email-popup"></span>
                    </div>
                    <div class="popup-form--select">
                      <select
                        name="chi-nhanh-popup"
                        id="chi-nhanh"
                        class="select-form"
                        required
                      >
                        <option value="" class="option-form--hidden">
                          Chị chọn chi nhánh gần nhất ở đây ạ.
                        </option>
                        <option
                          class="option-form"
                          value="Trụ sở chính : 33 Nguyễn Bỉnh Khiêm, Đa Kao, Quận 1"
                        >
                          Trụ sở chính : 33 Nguyễn Bỉnh Khiêm, Đa Kao, Quận 1
                        </option>
                        <option
                          class="option-form"
                          value="HCM 1: 32-34-36 Đường 3/2, Phường 12, Quận 10, Hồ Chí Minh"
                        >
                          HCM 1: 32-34-36 Đường 3/2, Phường 12, Quận 10, Hồ Chí
                          Minh
                        </option>
                        <option
                          class="option-form"
                          value="HCM 2: 185-187 Nguyễn Thái Học Phường Phạm Ngũ Lão, Quận 1"
                        >
                          HCM 2: 185-187 Nguyễn Thái Học Phường Phạm Ngũ Lão,
                          Quận 1
                        </option>
                        <option
                          class="option-form"
                          value="HCM 3: 392A Nguyễn Thị Thập, Phường Tân Quy, Quận 7"
                        >
                          HCM 3: 392A Nguyễn Thị Thập, Phường Tân Quy, Quận 7
                        </option>
                        <option
                          class="option-form"
                          value="Hà Nội 1: 106 Phố Huế, Phường Ngô Thì Nhậm, Quận Hai Bà Trưng"
                        >
                          Hà Nội 1: 106 Phố Huế, Phường Ngô Thì Nhậm, Quận Hai
                          Bà Trưng
                        </option>
                        <option
                          class="option-form"
                          value="Hà Nội 2: 65 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu Giấy"
                        >
                          Hà Nội 2: 65 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu
                          Giấy
                        </option>
                        <option
                          class="option-form"
                          value="Hà Nội 3: 8 Khúc Thừa Dụ, Phường Dịch Vọng, Quận Cầu Giấy"
                        >
                          Hà Nội 3: 8 Khúc Thừa Dụ, Phường Dịch Vọng, Quận Cầu
                          Giấy
                        </option>
                        <option
                          class="option-form"
                          value="Hải Phòng: Số 2, Lô 7B, Đường Lê Hồng Phong, Quận Ngô Quyền"
                        >
                          Hải Phòng: Số 2, Lô 7B, Đường Lê Hồng Phong, Quận Ngô
                          Quyền
                        </option>
                        <option
                          class="option-form"
                          value="Quảng Ninh: Lô A1, 15-16 Khu Monbay, Trần Quốc Nghiễn, Thành phố Hạ Long"
                        >
                          Quảng Ninh: Lô A1, 15-16 Khu Monbay, Trần Quốc Nghiễn,
                          Thành phố Hạ Long
                        </option>
                        <option
                          class="option-form"
                          value="Bình Dương: 464 Đại Lộ Bình Dương, Thành phố Thủ Dầu Một"
                        >
                          Bình Dương: 464 Đại Lộ Bình Dương, Thành phố Thủ Dầu
                          Một
                        </option>
                        <option
                          class="option-form"
                          value="Biên Hòa: 220 Đường 30/4, Phường Thanh Bình, Thành phố Biên Hòa"
                        >
                          Biên Hòa: 220 Đường 30/4, Phường Thanh Bình, Thành phố
                          Biên Hòa
                        </option>
                        <option
                          class="option-form"
                          value="Vũng Tàu: 157 Nam Kỳ Khỏi Nghĩa, Phường 3, Thành phố Vũng Tàu"
                        >
                          Vũng Tàu: 157 Nam Kỳ Khỏi Nghĩa, Phường 3, Thành phố
                          Vũng Tàu
                        </option>
                        <option
                          class="option-form"
                          value="Cần Thơ: 234B Trần Hưng Đạo,Phường An Nghiệp, Quận Ninh Kiều"
                        >
                          Cần Thơ: 234B Trần Hưng Đạo,Phường An Nghiệp, Quận
                          Ninh Kiều
                        </option>
                        <option
                          class="option-form"
                          value="Vinh: Số 2 Trần Phú, Phường Hồng Sơn, Thành phố Vinh"
                        >
                          Vinh: Số 2 Trần Phú, Phường Hồng Sơn, Thành phố Vinh
                        </option>
                        <option
                          class="option-form"
                          value="Đà Nẵng: 95 Nguyễn Văn Linh, Phường Nam Dương, Quận Hải Châu"
                        >
                          Đà Nẵng: 95 Nguyễn Văn Linh, Phường Nam Dương, Quận
                          Hải Châu
                        </option>
                        <option
                          class="option-form"
                          value="Nha Trang: 78 Lý Thánh Tôn, Phường Phương Sài, Tp. Nha Trang"
                        >
                          Nha Trang: 78 Lý Thánh Tôn, Phường Phương Sài, Tp. Nha
                          Trang
                        </option>
                        <option
                          class="option-form"
                          value="Buôn Ma Thuột: 2-4 Ngô Quyền, Phường Thắng Lợi, Thành phố Buôn Ma Thuột"
                        >
                          Buôn Ma Thuột: 2-4 Ngô Quyền, Phường Thắng Lợi, Thành
                          phố Buôn Ma Thuột
                        </option>
                        <option
                          class="option-form"
                          value="Phan Thiết: 154 Trần Hưng Đạo, Phường Phú Thủy, Thành phố Phan Thiết"
                        >
                          Phan Thiết: 154 Trần Hưng Đạo, Phường Phú Thủy, Thành
                          phố Phan Thiết
                        </option>
                      </select>
                    </div>
                    <div class="popup-form--select">
                      <select
                        name="dich-vu-popup"
                        id="dich-vu"
                        class="select-form"
                        required
                      >
                        <option class="option-form--hidden" value="">
                          Chọn dịch vụ yêu thích
                        </option>
                        <option
                          class="option-form"
                          value="Vàng trẻ hoá tái tạo da Bio Gold 24k"
                        >
                          <p>⭐</p>
                          Vàng trẻ hoá tái tạo da Bio Gold 24k
                        </option>
                        <option
                          class="option-form"
                          value="Ủ trắng mặt tinh chất hoa anh đào Skin White"
                        >
                          <span>⭐</span> Ủ trắng mặt tinh chất hoa anh đào Skin
                          White
                        </option>
                        <option
                          class="option-form"
                          value="Giảm mỡ thần tốc công nghệ từ Mỹ"
                        >
                          <span>⭐</span> Giảm mỡ thần tốc công nghệ từ Mỹ
                        </option>
                        <option
                          class="option-form"
                          value="Căng trắng da phương pháp điện di tế bào gốc"
                        >
                          <span>⭐</span> Căng trắng da phương pháp điện di tế
                          bào gốc
                        </option>
                        <option
                          class="option-form"
                          value="Xóa nám tận gốc chỉ sau 1 liệu trình"
                        >
                          <span>⭐</span> Xóa nám tận gốc chỉ sau 1 liệu trình
                        </option>
                        <option
                          class="option-form"
                          value="Loại bỏ sẹo rỗ mọi cấp độ"
                        >
                          <span>⭐</span> Loại bỏ sẹo rỗ mọi cấp độ
                        </option>
                        <option
                          class="option-form"
                          value="Triệt sạch vi-ô-lông mọi vùng cơ thể"
                        >
                          <span>⭐</span> Triệt sạch vi-ô-lông mọi vùng cơ thể
                        </option>
                        <option
                          class="option-form"
                          value="Đánh bay thâm quầng mắt/ Thâm mông/ Thâm mô"
                        >
                          <span>⭐</span> Đánh bay thâm quầng mắt/ Thâm mông/
                          Thâm mô
                        </option>
                      </select>
                    </div>
                    <button type="submit" class="popup-btn--signup" name="submitform-popup">
                      <span>đăng ký ngay</span>
                    </button>
                  </div>

                </form>
                <?php if (isset($_SESSION['mess-popup'])) :?>
                  <div class="mess-signup">
                    <?php  echo $_SESSION['mess-popup'] ?>
                  </div>
                  <??>
                <?php else :?>

                <?php endif?>
                <div class="popup-time">
                  <div class="popup-time--countdown">
                    <div class="popup-set--time day">
                      <div class="number">00</div>
                      <div class="text">Ngày</div>
                    </div>
                    <div class="popup-set--time hour">
                      <div class="number">00</div>
                      <div class="text">Giờ</div>
                    </div>
                    <div class="popup-set--time minute">
                      <div class="number">00</div>
                      <div class="text">Phút</div>
                    </div>
                    <div class="popup-set--time second">
                      <div class="number">00</div>
                      <div class="text">Giây</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="backdrop-popup"></div>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/sendMail.js"></script>
    <script src="./assets/js/slide.js"></script>
  </body>
</html>

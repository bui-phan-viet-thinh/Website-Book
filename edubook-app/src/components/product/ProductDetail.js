import Header from "../Header";
import Footer from "../Footer";
export default function ProducrDetail() {
  return (
    <>
    <Header/>
      <section className="product">
        <div className="container">
          <div className="row bg-white pt-4 pb-4 border-bt pc">
            <nav className="menu__nav col-lg-3 col-md-12 col-sm-0">
              <ul className="menu__list">
                <li className="menu__item menu__item--active">
                  <a href="#" className="menu__link">
                    <img
                      src="images1/item/baby-boy.png"
                      alt=""
                      className="menu__item-icon"
                      id="Capa_1"
                      enableBackground="new 0 0 512 512"
                      height={512}
                      viewbox="0 0 512 512"
                      width={512}
                    />
                    Sách Tiếng Việt
                  </a>
                </li>
                <li className="menu__item">
                  <a href="#" className="menu__link">
                    <img
                      src="images1/item/translation.png"
                      alt=""
                      className="menu__item-icon"
                      id="Capa_1"
                      enableBackground="new 0 0 512 512"
                      height={512}
                      viewbox="0 0 512 512"
                      width={512}
                    />
                    Sách nước ngoài
                  </a>
                </li>
                <li className="menu__item">
                  <a href="#" className="menu__link">
                    <img
                      src="images1/item/1380754_batman_comic_hero_superhero_icon.png"
                      alt=""
                      className="menu__item-icon"
                      viewbox="0 0 512 512"
                      width={1012}
                      height={512}
                    />
                    Manga - Comic
                  </a>
                </li>
              </ul>
            </nav>
            <article className="product__main col-lg-9 col-md-12 col-sm-12">
              <div className="row">
                <div className="product__main-img col-lg-4 col-md-4 col-sm-12">
                  <div className="product__main-img-primary">
                    <img src="images1/product/hoc-tap-qua-du-an-2-01-1.jpg" />
                  </div>
                  <div className="product__main-img-list">
                    <img src="images1/product/hoc-tap-qua-du-an-2-01-1.jpg" />
                    <img src="images1/product/hoc-tap-qua-du-an-2-01-1 1.jpg" />
                    <img src="images1/product/hoc-tap-qua-du-an-2-01-1 2.jpg" />
                    <img src="images1/product/23f849a0617301e63159067164aecfd2.png" />
                  </div>
                </div>
                <div className="product__main-info col-lg-8 col-md-8 col-sm-12">
                  <div className="product__main-info-breadcrumb">
                    Trang chủ / Sản phẩm
                  </div>
                  <a href="#" className="product__main-info-title">
                    <h2 className="product__main-info-heading">
                      Học tập qua dự án
                    </h2>
                  </a>
                  <div className="product__main-info-rate-wrap">
                    <i className="fas fa-star product__main-info-rate" />
                    <i className="fas fa-star product__main-info-rate" />
                    <i className="fas fa-star product__main-info-rate" />
                    <i className="fas fa-star product__main-info-rate" />
                    <i className="fas fa-star product__main-info-rate" />
                  </div>
                  <div className="product__main-info-price">
                    <span className="product__main-info-price-current">
                      140.000đ
                    </span>
                  </div>
                  <div className="product__main-info-description">
                    Trong gần một thế kỷ qua, nhiều nhà giáo dục đã tiến hành
                    nghiên cứu và ghi nhận về những lợi ích của việc học tập qua
                    trải nghiệm, thực hành, và lấy người học làm trung tâm. Nhà
                    bác học Albert Einste...
                  </div>
                  <div className="product__main-info-cart">
                    {/*<div class="product__main-info-cart-quantity">
                              <input type="button" value="-"  class="product__main-info-cart-quantity-minus">
                              <input type="number" step="1" min="1" max="999" value="1" class="product__main-info-cart-quantity-total">
                              <input type="button" value="+" class="product__main-info-cart-quantity-plus">
                          </div>*/}
                    <div className="product__main-info-cart-btn-wrap">
                      <button className="product__main-info-cart-btn">
                        Thêm vào giỏ hàng
                      </button>
                    </div>
                  </div>
                  <div className="product__main-info-contact">
                    <a href="#" className="product__main-info-contact-fb">
                      <i className="fab fa-facebook-f" />
                      Chat Facebook
                    </a>
                    <div className="product__main-info-contact-phone-wrap">
                      <div className="product__main-info-contact-phone-icon">
                        <i className="fas fa-phone-alt " />
                      </div>
                      <div className="product__main-info-contact-phone">
                        <div className="product__main-info-contact-phone-title">
                          Gọi điện tư vấn
                        </div>
                        <div className="product__main-info-contact-phone-number">
                          ( 0352.860.701)
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div className="row bg-white">
                <div className="col-12 product__main-tab">
                  <a
                    href="#"
                    className="product__main-tab-link product__main-tab-link--active"
                  >
                    Mô tả
                  </a>
                  <a href="#" className="product__main-tab-link">
                    Đánh giá
                  </a>
                </div>
                <div className="col-12 product__main-content-wrap">
                  <h2 className="product__main-content-heading">
                    Học tập qua dự án
                  </h2>
                  <p>
                    <span>Trong gần một thế kỷ qua ,</span> nhiều nhà giáo dục
                    đã tiến hành nghiên cứu và ghi nhận về những lợi ích của
                    việc học tập qua trải nghiệm, thực hành, và lấy người học
                    làm trung tâm. Nhà bác học Albert Einstein đã từng nói: “Ví
                    dụ không phải là một cách khác để dạy học; ví dụ là cách duy
                    nhất để dạy học”. Hầu như giáo viên nào cũng hiểu về sự hấp
                    dẫn của việc học tập gắn liền với thực tế so với lớp học
                    thuần lý thuyết.
                  </p>
                  <p>
                    <span>
                      {" "}
                      Hai tác giả Hoàng Anh Đức và Tô Thụy Diễm Quyên{" "}
                    </span>{" "}
                    muốn đưa ra cách tiếp cận nhẹ nhàng và trực quan cho cả các
                    giáo viên lẫn học sinh đối với Học tập qua dự án; sử dụng
                    các dự án để làm những ví dụ đa dạng, đa chiều và gắn liền
                    với thực tế nhất, qua đó giúp người đọc tự xây dựng nên kho
                    tàng kiến thức và kỹ năng của chính bản thân mình.
                  </p>
                  <p>
                    <span>Học tập qua dự án (PBL)</span> là một mô hình tổ chức
                    lớp học nhằm làm năng động hoá lớp học truyền thống vốn lấy
                    bài học làm trung tâm và giáo viên là trọng tâm. Học tập qua
                    dự án hướng tới mục tiêu lâu dài, lấy người học làm trung
                    tâm, liên nội dung và tích hợp các vấn đề thực hành thực tế.
                    Bằng việc giáo viên lùi lại, đảm nhận vai trò dẫn dắt và
                    trao quyền cho học sinh làm chủ quá trình học tập, học sinh
                    hình thành tinh thần trách nhiệm đối với việc học, từ đó tạo
                    dựng môi trường học tập chủ động hơn
                  </p>
                  <p>
                    {" "}
                    <span>Sách gồm 4 phần chính:</span>
                  </p>
                  <p>
                    <span>Phần I: Giới thiệu về học tập qua dự án</span> <br />
                    Phần này gồm 3 chương, giới thiệu tổng quan về học tập qua
                    dự án, 6 tính chất học tập của dự án học tập, và 8 bước
                    triển khai học tập qua dự án trong trường phổ thông
                  </p>
                  <p>
                    <span>Phần II: Triển khai dự án </span> <br />
                    Phần này gồm 8 chương giúp giáo viên và học sinh biết cách
                    đặt dự án vào một không gian phù hợp, biết cách triển khai
                    dự án từ một không gian có sẵn.
                  </p>
                  <p>
                    <span>Phần III: Giới thiệu về học tập qua dự án</span>{" "}
                    <br />
                    Phần này cung cấp kiến thức cơ bản về các biện pháp khác
                    nhau để đánh giá Dự án học tập, cũng như các cấp độ khác
                    nhau để đánh giá các hoạt động học tập.
                  </p>
                  <p>
                    <span>Phần IV: Phụ lục </span> <br />
                    Phần này mở rộng một số vấn đề như: Tư duy STEM trong học
                    tập qua dự án, các vấn đề thường gặp và gợi ý hướng xử lí….
                    Cuốn sách tích hợp với các mã QR code để giáo viên, học sinh
                    có thể xem minh hoạ các dự án đã được thực hiện và đạt giải
                    ở các cuộc thi Giáo viên sáng tạo.
                  </p>
                  <p>Trân trọng giới thiệu cùng bạn đọc.</p>
                  <h2 className="thongtin">
                    {" "}
                    <span>Thông tin chi tiết</span>
                  </h2>
                  <div className="table-responsive">
                    <table className="table table-bordered">
                      <tbody>
                        <tr>
                          <th>Công ty phát hành</th>
                          <td>NXB Giáo Dục Việt Nam</td>
                        </tr>
                        <tr>
                          <th>Ngày xuất bản</th>
                          <td>2019-03-15 11:47:36</td>
                        </tr>
                        <tr>
                          <th>Kích thước</th>
                          <td>19 x 27 cm</td>
                        </tr>
                        <tr>
                          <th>Loại bìa</th>
                          <td>Bìa gập</td>
                        </tr>
                        <tr>
                          <th>Số trang</th>
                          <td>168</td>
                        </tr>
                        <tr>
                          <th>SKU</th>
                          <td>4119626029817</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </article>
            <aside className="product__aside col-lg-3 col-md-0 col-sm-0">
              <div className="product__aside-top">
                <div className="product__aside-top-item">
                  <img src="images/shipper.png" />
                  <div className="product__aside-top-item-text">
                    <p>Giao hàng nhanh chóng</p>
                    <span>Chỉ trong vòng 24h</span>
                  </div>
                </div>
                <div className="product__aside-top-item">
                  <img src="images/brand.png" />
                  <div className="product__aside-top-item-text">
                    <p>Sản phẩm chính hãng</p>
                    <span>Sản phẩm nhập khẩu 100%</span>
                  </div>
                </div>
                <div className="product__aside-top-item">
                  <img src="images/less.png" />
                  <div className="product__aside-top-item-text">
                    <p>Mua hàng tiết kiệm</p>
                    <span>Rẻ hơn từ 10% đến 30%</span>
                  </div>
                </div>
              </div>
              <div className="product__aside-bottom">
                <h3 className="product__aside-heading">Có thể bạn thích</h3>
                <div className="product__aside-list">
                  <div className="product__aside-item product__aside-item--border">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/image_227958.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          {" "}
                          Giáo Dục Stem/Steam : Từ Trải Nghiệm Thực Hành Đến Tư
                          Duy
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          72.250
                        </span>
                      </div>
                    </div>
                  </div>
                  <div className="product__aside-item">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/untitled-1_9_25_1.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          Tôi Thích Bản Thân Nỗ Lực Hơn ( Tái bản 2019)
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          76.800đ
                        </span>
                      </div>
                    </div>
                  </div>
                  <div className="product__aside-item">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/image_187163.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          Tuổi Thơ Dữ Dội - Tập 2 (Tái Bản 2019)
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          69.000đ
                        </span>
                      </div>
                    </div>
                  </div>
                  <div className="product__aside-item">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/image_188285.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          Chuyện Con Mèo Dạy Hải Âu Bay
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          34.300đ
                        </span>
                      </div>
                    </div>
                  </div>
                  <div className="product__aside-item">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/8936186542176.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          Tôi Thích Một Cô Gái Nhưng Không Dám Ngỏ Lời
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          70.000đ
                        </span>
                      </div>
                    </div>
                  </div>
                  <div className="product__aside-item">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/biamem.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          Con Chim Xanh Biếc Bay Về - Tặng Kèm 6
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          112.500đ
                        </span>
                      </div>
                    </div>
                  </div>
                  <div className="product__aside-item">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/8936049524905.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          5 Centimet Trên Giây
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          39.500đ
                        </span>
                      </div>
                    </div>
                  </div>
                  <div className="product__aside-item">
                    <div className="product__aside-img-wrap">
                      <img
                        src="images1/product/bia1_tobinhyen_2_1_1.jpg"
                        className="product__aside-img"
                      />
                    </div>
                    <div className="product__aside-title">
                      <a href="#" className="product__aside-link">
                        <h4 className="product__aside-link-heading">
                          Tô Bình Yên Vẽ Hạnh Phúc
                        </h4>
                      </a>
                      <div className="product__aside-rate-wrap">
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                        <i className="fas fa-star product__aside-rate" />
                      </div>
                      <div className="product__aside-price">
                        <span className="product__aside-price-current">
                          63.960đ
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <div className="customer-reviews row pb-4 pb-4  py-4 pb-4 py-4 py-4">
            <div className="col-lg-12 col-md-12 col-sm-12">
              <h3>Bình luận sản phẩm</h3>
              <form id="formgroupcomment" method="post">
                <div className="form-group">
                  <label>Tên:</label>
                  <input
                    name="comm_name"
                    required=""
                    type="text"
                    id="form-name"
                    className="form-control"
                  />
                </div>
                <div className="form-group">
                  <label>Email:</label>
                  <input
                    name="comm_mail"
                    required=""
                    type="email"
                    className="form-control"
                    id="pwd"
                  />
                </div>
                <div className="form-group">
                  <label>Nội dung:</label>
                  <textarea
                    name="comm_details"
                    required=""
                    rows={8}
                    id="formcontent"
                    className="form-control"
                    defaultValue={""}
                  />
                </div>
                <button
                  type="submit"
                  name="sbm"
                  id="submitcomment"
                  className="btn btn-primary"
                >
                  Gửi
                </button>
              </form>
            </div>
          </div>
          <div className="product-comment row pb-4 pb-4  py-4 pb-4 py-4 py-4">
            <div className="col-lg-12 col-md-12 col-sm-12">
              <div className="comment-item">
                <ul className="item-reviewer">
                  <div className="comment-item-user">
                    <img
                      src="images/img/1.png"
                      alt=""
                      className="comment-item-user-img"
                    />
                    <li>
                      <b>Nguyễn Nhung</b>
                    </li>
                  </div>
                  <br />
                  <li>2021-08-17 20:40:10</li>
                  <li>
                    <h4>
                      Sách được bọc nilong kỹ càng, sạch, mới. Giao hàng nhanh.
                      Nội dung chưa đọc nhưng nhìn sơ có vẻ hấp dẫn và rất nhiều
                      kiến thức bổ ích. Mình ở nước ngoài nhờ người mua rồi gửi
                      qua nên khâu đóng gói của người bán quan trọng lắm, giúp
                      cho sách vận chuyển đi xa cũng không bị hư tổn gì. Sẽ tiếp
                      tục ủng hộ. Love book shop .From Hust with LOve
                    </h4>
                  </li>
                </ul>
              </div>
              <div className="comment-item">
                <ul className="item-reviewer">
                  <div className="comment-item-user">
                    <img
                      src="images/img/2.png"
                      alt=""
                      className="comment-item-user-img"
                    />
                    <li>
                      <b>Tùng Lương</b>
                    </li>
                  </div>
                  <br />
                  <li>2021-02-17 12:20:10</li>
                  <li>
                    <h4>
                      Sách được đóng rất cẩn thận, hộp ko bị móp méo gì cả ....
                      , giao hàng chậm cả tuần, Rõ trên app báo hàng đến kho rồi
                      cả tuần k thấy đâu. shipper rất vui tính và thân thiện .
                      Còn ngoài ra thì sách rất đẹp nha mọi người. Giấy sáng và
                      thơm. Từ bìa tới màu sắc trong sách.Thấy mọi người bảo hay
                      lắm nên mua về thử chứ mk chưa có đọc nên chưa thể review
                      về nội dung.
                    </h4>
                  </li>
                </ul>
              </div>
              <div className="comment-item">
                <ul className="item-reviewer">
                  <div className="comment-item-user">
                    <img
                      src="images/img/5.png"
                      alt=""
                      className="comment-item-user-img"
                    />
                    <li>
                      <b>Trung Trần</b>
                    </li>
                  </div>
                  <br />
                  <li>2020-12-27 10:48:20</li>
                  <li>
                    <h4>
                      Love it! - Sách bìa cứng, in màu, giấy dày. - Giao hàng
                      đúng hẹn, bao bì cẩn thận. -mình đã tham gia 1 lớp nhưng
                      chưa thông lắm nên mua về đọc lại.Giờ thì thông rồi .Giá
                      hơi chát nhưng phù hợp, hy vọng sẽ có giá tốt hơn vào kỳ
                      tái bản kế tiếp! - Nội dung hay, công phu, nhiều thuật ngữ
                      nhưng viết dễ hiểu, hữu ích; có lẽ dịch cũng tốt nữa! Tò
                      mò quá nên mình mua thêm ebook tiếng Anh để đọc thêm nâng
                      cao từ vựng. Quyển này đọc nguyên gốc (tiếng Anh) trước
                      chắc sẽ rất khó đọc. Bạn nào làm quản lý mua đọc cũng hữu
                      ích! Đáng đồng tiền bát gạo!
                    </h4>
                  </li>
                </ul>
              </div>
              <div className="comment-item">
                <ul className="item-reviewer">
                  <div className="comment-item-user">
                    <img
                      src="images/img/6.png"
                      alt=""
                      className="comment-item-user-img"
                    />
                    <li>
                      <b>Sơn Hoàng</b>
                    </li>
                  </div>
                  <br />
                  <li>2020-08-17 20:40:18</li>
                  <li>
                    <h4>
                      sách được đóng trong hộp và có 1 lớp màng nilon bảo vệ.
                      Gáy sách ko bị móp méo, chất lượng giấy, màu sắc rất
                      tuyệt. Nội dung cực kỳ hữu ích, rất dễ hiểu cho thể loại
                      sách thuần về lý thuyết tâm lý.Nội dung sách mới, lạ. Sách
                      sử dụng rất nhiều thuật ngữ khoa học, nên đòi hỏi người
                      đọc kiên nhẫn và có hiểu biết nhất định. Cực kỳ hài lòng
                      và sẽ ủng hộ tiếp
                    </h4>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <section className="product__love col-12 mt-4">
            <div className="row bg-white">
              <div className="col-lg-12 col-md-12 col-sm-12 product__love-title">
                <h2 className="product__love-heading">Sản phẩm tương tự</h2>
              </div>
            </div>
            <div className="row bg-white">
              <div className="product__panel-item col-lg-2 col-md-3 col-sm-6">
                <div className="product__panel-img-wrap">
                  <img
                    src="images1/product/image_189077.jpg"
                    alt=""
                    className="product__panel-img"
                  />
                </div>
                <h3 className="product__panel-heading">
                  <a href="#" className="product__panel-link">
                    Tâm Lý Học - Khái Lược Những Tư Tưởng Lớn
                  </a>
                </h3>
                <div className="product__panel-rate-wrap">
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                </div>
                <div className="product__panel-price">
                  <span className="product__panel-price-old product__panel-price-old-hide">
                    300.000đ
                  </span>
                  <span className="product__panel-price-current">273.000đ</span>
                </div>
              </div>
              <div className="product__panel-item col-lg-2 col-md-3 col-sm-6">
                <div className="product__panel-img-wrap">
                  <img
                    src="images1/product/camnangppsupham.u84.d20161125.t123417.884704.jpg"
                    alt=""
                    className="product__panel-img"
                  />
                </div>
                <h3 className="product__panel-heading">
                  <a href="#" className="product__panel-link">
                    Cẩm Nang Phương Pháp Sư Phạm (Tái Bản 2020)
                  </a>
                </h3>
                <div className="product__panel-rate-wrap">
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                </div>
                <div className="product__panel-price">
                  <span className="product__panel-price-old product__panel-price-old-hide">
                    150.000đ
                  </span>
                  <span className="product__panel-price-current">120.000đ</span>
                </div>
              </div>
              <div className="product__panel-item col-lg-2 col-md-3 col-sm-6">
                <div className="product__panel-img-wrap">
                  <img
                    src="images1/product/image_197655.jpg"
                    alt=""
                    className="product__panel-img"
                  />
                </div>
                <h3 className="product__panel-heading">
                  <a href="#" className="product__panel-link">
                    STEM- Kỹ Thuật Siêu Đơn Giản
                  </a>
                </h3>
                <div className="product__panel-rate-wrap">
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                </div>
                <div className="product__panel-price">
                  <span
                    className="product__panel-price-old product__panel-price-old-hide 
                  "
                  >
                    50.000đ
                  </span>
                  <span className="product__panel-price-current">47.200đ</span>
                </div>
              </div>
              <div className="product__panel-item col-lg-2 col-md-3 col-sm-6">
                <div className="product__panel-img-wrap">
                  <img
                    src="images1/product/9786045890332.jpg"
                    alt=""
                    className="product__panel-img"
                  />
                </div>
                <h3 className="product__panel-heading">
                  <a href="#" className="product__panel-link">
                    Cẩm Nang Tư Duy Học Tập Và Nghiên Cứu..
                  </a>
                </h3>
                <div className="product__panel-rate-wrap">
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                </div>
                <div className="product__panel-price">
                  <span className="product__panel-price-old product__panel-price-old-hide">
                    30.000đ
                  </span>
                  <span className="product__panel-price-current">24.000đ</span>
                </div>
              </div>
              <div className="product__panel-item col-lg-2 col-md-3 col-sm-6">
                <div className="product__panel-img-wrap">
                  <img
                    src="images1/product/image_195509_1_21191.jpg"
                    alt=""
                    className="product__panel-img"
                    width={110}
                  />
                </div>
                <h3 className="product__panel-heading">
                  <a href="#" className="product__panel-link">
                    Phương Pháp Giáo Con Của Người Do Thái <br />
                  </a>
                </h3>
                <div className="product__panel-rate-wrap">
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                </div>
                <div className="product__panel-price">
                  <span className="product__panel-price-old product__panel-price-old-hide">
                    62.000đ
                  </span>
                  <span className="product__panel-price-current">37.200đ</span>
                </div>
              </div>
              <div className="product__panel-item col-lg-2 col-md-3 col-sm-6">
                <div className="product__panel-img-wrap">
                  <img
                    src="images1/product/image_227958.jpg"
                    alt=""
                    className="product__panel-img"
                  />
                </div>
                <h3 className="product__panel-heading">
                  <a href="#" className="product__panel-link">
                    Giáo Dục Stem/Steam:Từ Trải Nghiệm Thực Hành..
                  </a>
                </h3>
                <div className="product__panel-rate-wrap">
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                  <i className="fas fa-star product__panel-rate" />
                </div>
                <div className="product__panel-price">
                  <span className="product__panel-price-old product__panel-price-old-hide">
                    85.000đ
                  </span>
                  <span className="product__panel-price-current">72.250đ</span>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <Footer/>
    </>
  );
}

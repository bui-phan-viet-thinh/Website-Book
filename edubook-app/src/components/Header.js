import { NavLink } from "react-router-dom";
export default function Header() {
  return (
    <>
      <header id="header">
        {/* header top */}
        <div className="header__top">
          <div className="container">
            <section className="row flex">
              <div className="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                <span>EduBook - Cội nguồn của tri thức</span>
              </div>
              <nav className="col-lg-7 col-md-0 col-sm-0 header__top-right">
                <ul className="header__top-list">
                  <li className="header__top-item">
                    <a href="#" className="header__top-link">
                      Đăng ký
                    </a>
                  </li>
                  <li className="header__top-item">
                    <a href="#" className="header__top-link">
                      Đăng nhập
                    </a>
                  </li>
                </ul>
              </nav>
            </section>
          </div>
        </div>
        {/*end header top */}
        {/* header bottom */}
        <div className="header__bottom">
          <div className="container">
            <section className="row">
              <div className="col-lg-3 col-md-4 col-sm-12 header__logo">
                <h1 className="header__heading">
                  <a href="#" className="header__logo-link">
                    <img
                      src="images1/logo1.png"
                      alt="Logo"
                      className="header__logo-img"
                    />
                  </a>
                </h1>
              </div>
              <div className="col-lg-6 col-md-7 col-sm-0 header__search">
                <select name="" id="" className="header__search-select">
                  <option value={0}>All</option>
                  <option value={1}>Sách Ebook</option>
                  <option value={2}>Sách In</option>
                </select>
                <input
                  type="text"
                  className="header__search-input"
                  placeholder="Tìm kiếm tại đây..."
                />
                <button className="header__search-btn">
                  <div className="header__search-icon-wrap">
                    <i className="fas fa-search header__search-icon" />
                  </div>
                </button>
              </div>
              <div className="col-lg-2 col-md-0 col-sm-0 header__call">
                <div className="header__call-icon-wrap">
                  <i className="fas fa-phone-alt header__call-icon" />
                </div>
                <div className="header__call-info">
                  <div className="header__call-text">Gọi điện tư vấn</div>
                  <div className="header__call-number">039.882.3232</div>
                </div>
              </div>
              <a
                href="cart.html"
                className="col-lg-1 col-md-1 col-sm-0 header__cart"
              >
                <div className="header__cart-icon-wrap">
                  <span className="header__notice">4</span>
                  <i className="fas fa-shopping-cart header__nav-cart-icon" />
                </div>
              </a>
            </section>
          </div>
        </div>
        {/*end header bottom */}
        {/* header nav */}
        <div className="header__nav">
          <div className="container">
            <section className="row">
              <div className="header__nav col-lg-9 col-md-0 col-sm-0">
                <ul className="header__nav-list">
                  <li className="header__nav-item">
                    <NavLink to="/" className="header__nav-link">
                      Trang chủ
                    </NavLink>
                  </li>
                  <li className="header__nav-item">
                    <NavLink to="/shop" className="header__nav-link">
                      Danh mục sản phẩm
                    </NavLink>
                  </li>
                  <li className="header__nav-item">
                  <NavLink to="/contact" className="header__nav-link">
                       Liên hệ
                  </NavLink>
                  </li>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </header>
      
    </>
  );
}

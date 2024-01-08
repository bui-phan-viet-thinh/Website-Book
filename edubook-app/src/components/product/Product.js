import { NavLink } from "react-router-dom";
import ProductDetail from "./ProductDetail";
export default function Product() {
  return (
    <>
      <div className="product__panel-item col-lg-2 col-md-3 col-sm-6">
        <div className="product__panel-img-wrap">
          <NavLink to="/product-detail">
            <img
              src="images1/product/image_187163.jpg"
              alt=""
              className="product__panel-img"
            />
          </NavLink>
        </div>
        <h3 className="product__panel-heading">
          <a href="#" className="product__panel-link">
            Tuổi Thơ Dữ Dội - Tập 2 (Tái Bản 2019)
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
            80.000đ
          </span>
          <span className="product__panel-price-current">69.000đ</span>
        </div>
      </div>
    </>
  );
}

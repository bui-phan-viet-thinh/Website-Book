import Product from "./Product";
export default function Category() {
  return (
    <>
      <section id="category1" className="product__love">
        <div className="container">
          <div className="row bg-white">
            <div className="col-lg-12 col-md-12 col-sm-12 product__love-title">
              <h2 className="product__love-heading upper">Sách Tiếng Việt</h2>
            </div>
          </div>
          <div className="row bg-white">
            <Product/>
            <Product/>
            <Product/>
            <Product/>
            <Product/>
            <Product/>
            <Product/>
            <Product/>
            <Product/>
          </div>
        </div>
      </section>
    </>
  );
}

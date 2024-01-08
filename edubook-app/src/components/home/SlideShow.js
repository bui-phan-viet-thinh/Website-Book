export default function SlideShow()
{
    return(
        <>
        <section className="menu-slide">
        <div className="container">
          <div className="row">
            <div className="slider col-lg-9 col-md-12 col-sm-0">
              <div className="row">
                <div className="slide__left col-lg-8 col-md-0 col-sm-0">
                  <div
                    id="carouselExampleIndicators"
                    className="carousel slide"
                    data-ride="carousel"
                    data-interval={3000}
                  >
                    {/* <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol> */}
                    <div className="carousel-inner">
                      <div className="carousel-item active">
                        <img
                          src="images1/banner/363488_final1511.jpg"
                          className="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div className="carousel-item">
                        <img
                          src="images1/banner/Gold_DongA_600X350.jpg"
                          className="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div className="carousel-item">
                        <img
                          src="images1/banner/megabook-glod600X350.png"
                          className="d-block w-100"
                          alt="..."
                        />
                      </div>
                    </div>
                    <a
                      className="carousel-control-prev"
                      href="#carouselExampleIndicators"
                      role="button"
                      data-slide="prev"
                    >
                      <span
                        className="carousel-control-prev-icon"
                        aria-hidden="true"
                      />
                      <span className="sr-only">Previous</span>
                    </a>
                    <a
                      className="carousel-control-next"
                      href="#carouselExampleIndicators"
                      role="button"
                      data-slide="next"
                    >
                      <span
                        className="carousel-control-next-icon"
                        aria-hidden="true"
                      />
                      <span className="sr-only">Next</span>
                    </a>
                  </div>
                  <div className="slide__left-bottom">
                    <div className="slide__left-botom-one">
                      <img
                        src="images1/banner/363107_05.jpg"
                        className="slide__left-bottom-one-img"
                      />
                    </div>
                    <div className="slide__left-bottom-two">
                      <img
                        src="images1/banner/363104_06.jpg"
                        className="slide__left-bottom-tow-img"
                      />
                    </div>
                  </div>
                </div>
                <div className="slide__right col-lg-4 col-md-0 col-sm-0">
                  <img
                    src="images1/banner/slider-right.png"
                    className="slide__right-img"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </>
    )
}
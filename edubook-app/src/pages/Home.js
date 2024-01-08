import Header from "../components/Header"
import Footer from "../components/Footer"
import Category from "../components/product/Category"
import SlideShow from "../components/home/SlideShow"
export default function Home()
{
    return(
        <>
         <div className="app">
            <Header/>
            <SlideShow/>
            <Category></Category>
            <Footer/>
         </div>
        </>
    )
}
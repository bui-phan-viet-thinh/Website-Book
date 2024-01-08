import Header from "../components/Header"
import Footer from "../components/Footer"
import Contact from "../components/contact/information"
export default function Contacts()
{
    return(
        <>
         <div className="app">
            <Header/>
            <Contact></Contact>
            <Footer/>
         </div>
        </>
    )
}
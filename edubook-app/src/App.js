import { Routes,Route } from "react-router-dom";
import Home from "./pages/Home";
import Shop from "./pages/Shop";
import ProducrDetail from "./components/product/ProductDetail";
import Contacts from "./pages/Contact";
function App() {
  return (
    <>
    <Routes>
      <Route path="/" element={<Home />}></Route>
      <Route path="/shop" element={<Shop />}></Route>
      <Route path="/product-detail" element={<ProducrDetail />}></Route>
      <Route path="/contact" element={<Contacts />}></Route>
    </Routes>
    
    </>
  );
}

export default App;

import React from "react";
import {Routes, Route} from "react-router-dom";
import EmailInput from "./views/pages/EmailInput";
import Register from "./views/pages/Register";
import Homeschooler from "./views/pages/Homeschooler";
import Parent from "./views/pages/Parent";
import Tutor from "./views/pages/Tutor";

const App = () => {
    return (
        <Routes>
            <Route path="/" element={<EmailInput />} />
            <Route path="/register" element={<Register />} />
            <Route path="/homeschooler" element={<Homeschooler />} />
            <Route path="/parent" element={<Parent />} />
            <Route path="/tutor" element={<Tutor />} />
        </Routes>
    )
}

export default App;

import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./login";
import { Navigate, Routes, Route } from "react-router-dom";

function Main() {
    return(
        <Routes>
            <Route path="/example-app/public/" element={<Login/>}>
            
            <Route path="card" element={<Card_C/>}/>
            <Route path="listcards" element={<ListCards/>}/>
            <Route path="*" element={<Navigate replace to="/" />}/>
            </Route>
        </Routes>
    )
}

export default Main;
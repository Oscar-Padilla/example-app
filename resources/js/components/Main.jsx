import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import { Navigate, Routes } from "react-router-dom";

function Main() {
    return(
        <Routes>
            <Route path="/example-app/public/" element={<Menu/>}>
                <Route path="card" element={<Card_C/>}/>
                <Route path="listcards" element={<ListCards/>}/>
                <Route path="#" element={<Navigate replace to="/" />}/>
            </Route>
        </Routes>
    )
}
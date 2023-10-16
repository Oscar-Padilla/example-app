import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import Card_C from './Card_C';
import axios from 'axios';
import {Stack, Spinner} from 'react-bootstrap';

function ListCards() {
  const [userData, setUserData]= useState({})
  useEffect(()=>{
    const getUsers = async() =>{
      await axios.get("http://localhost/example-app/public/api/user_index")
      .then(function (response) {
        // manejar respuesta exitosa
        console.log(userData);
        setUserData(response.data);
      })
      .catch(function (error) {
        // manejar error
        console.log(error);
      })
      .finally(function () {
        // siempre sera executado
      });
    }
    getUsers()
  },[])

  if (!userData.length) return
    <Spinner animation="border" role="status">
        <span className="visually-hidden">Loading...</span>
      </Spinner>
  
  return (
    <Stack>
      {userData.map((user)=>(
        <Card_C 
          id={user.id}
          name={user.name} 
          email={user.email}
        />
      ))}
    </Stack>
  );
}

export default ListCards;

/*if (document.getElementById('app')) {
  const Index = ReactDOM.createRoot(document.getElementById("app"));
  Index.render(
    <React.StrictMode>
      <ListCards/>
    </React.StrictMode>
  )
}*/

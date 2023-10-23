import React, {useState} from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import { Button } from "react-bootstrap";
import Form from "react-bootstrap/Form";

function Login() {
    const [formValue, setformValue] = useState({
        email: '',
        password: ''
    }) 
    const navigate = useNavigate();
    const onChange = (e) => {
        e.persist();
        setformValue({...formValue, [e.target.name]:e.target.value});
    }

    const handleSubmit = (e) => {
        if (e && e.preventDefault()) e.preventDefault();
        const formData = new FormData();
        formData.append("email", formValue.email)
        formData.append("password", formValue.password)
        axios.post("http://localhost/example-app/public/api/login", 
        formData,
        {headers: {'Content-Type': 'multipart/form-data',
        'Accept':'application/json'}}
        ).then(response => {
            console.log('response');
            console.log(response);
            navigate("/example-app/public/listcards");
        }).catch(error =>{
            console.log(error);
        });
    };
    return (
        <Form onSubmit={handleSubmit}>
            <Form.Group className="mb-3" controlId="formBasicEmail">
              <Form.Label>Email address</Form.Label>
              <Form.Control type="email" placeholder="Enter email" 
              name="email" value={formValue.email} onChange={onChange}/>
              <Form.Text className="text-muted">
                We'll never share your email with anyone else.
              </Form.Text>
            </Form.Group>

            <Form.Group className="mb-3" controlId="formBasicPassword">
              <Form.Label>Password</Form.Label>
              <Form.Control type="password" placeholder="Password" 
              name="password" value={formValue.password} onChange={onChange}/>
            </Form.Group>
            <Form.Group className="mb-3" controlId="formBasicCheckbox">
              <Form.Check type="checkbox" label="Check me out" />
            </Form.Group>
            <Button variant="primary" type="submit">
              Submit
            </Button>
        </Form>  
    );
}

export default Login;
import {useState} from 'react';
import axios from 'axios';

const EmailInput = () =>{
    const [email, setEmail] = useState("");
    const [message, setMessage] = useState("");

    const handleSubmit = async (e) => {
        e.preventDefault();
        setMessage("Checking...");

        try {
            const response = await axios.post('http://localhost:8000/api/email-check', {email});

            if (response.data.exists){
                setMessage("Verification email sent! Check your inbox.");
            }
            else{
                setMessage("Welcome to itSTARTS! Sending verification email for registration, please check your inbox.");
            }
        }
        catch (error){
            setMessage("An error occurred. Please try again later.");
        }
    };

    return (
        <div>
            <h2>Enter Your Email</h2>
            <form onSubmit={handleSubmit}>
                <input type="email"
                placeholder="itstarts.withme@mail.com"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                required
                />
                <button type="submit">Submit</button>
            </form>
            <p>{message}</p>
        </div>
    )
};

export default EmailInput;

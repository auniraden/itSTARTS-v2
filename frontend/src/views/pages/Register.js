import React from 'react';

const Register = () => {
    return (
        <div>
        <h2>Please Complete Registration</h2>
        <form>
            <label>
                First Name:
                <input type="text" name="first_name" required />
            </label>
            <br />
            <label>
                Last Name:
                <input type="text" name="last_name" required />
            </label>
            <br />
            <label>
                Select Your Role:
                <select name="role" required>
                    <option value="">Select Role</option>
                    <option value="homeschooler">Homeschooler</option>
                    <option value="parent">Parent</option>
                    <option value="tutor">Tutor</option>
                </select>
            </label>
            <br/>
            <button type="submit">Register</button>
        </form>
        </div>
    )
}

export default Register;

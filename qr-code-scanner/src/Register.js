import React from 'react';
import { Link } from 'react-router-dom';
import RoundedReseau from './RoundedReseau';
import './css/register.css';
import espaceJeunesLogo from './img/espacejeunes.png';

class Register extends React.Component {
  render() {
    return (
      <div>
        <div className="container-register">
          <h1 className="register-title">Espace Jeunes</h1>
          <form className="login-form-register">
            <label htmlFor="username">Pseudo</label>
            <input type="text" id="username" name="username" placeholder="Entrer votre pseudo" />

            <label htmlFor="email">Email</label>
            <input type="email" id="email" pattern=".+@globex\.com" size="30" required placeholder="Entrer votre email" />

            <label htmlFor="password1">Mot de passe</label>
            <input type="password" id="password1" name="password" placeholder="Entrer votre mot de passe" />

            <label htmlFor="password2">Confirmer le mot de passe</label>
            <input type="password" id="password2" name="password" placeholder="Entrer de nouveau mot de passe" />

            <button type="submit">S'inscrire</button>
            <Link to="/login">
              <button type="button">Se connecter</button>
            </Link>
          </form>
        </div>
        <RoundedReseau />
      </div>
    );
  }
}

export default Register;

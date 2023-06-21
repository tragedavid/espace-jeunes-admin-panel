import React from 'react';
import RoundedReseau from './RoundedReseau';
import './css/login.css';
import espaceJeunesLogo from './img/espacejeunes.png';

class Login extends React.Component {
  render() {
    return (
      <div>
        <div className="container-login">
            <img src={espaceJeunesLogo} alt="Logo de la société" className="logo-login" />
            <h1 className="login-title">Espace Jeunes</h1>
            <form className="login-form-login">
                <label htmlFor="username">Pseudo</label>
                <input type="text" id="username" name="username" placeholder="Entrer votre pseudo" />

                <label htmlFor="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe" />

                <button type="submit">Se connecter</button>
            </form>
        </div>
        <RoundedReseau />
      </div>
    );
  }
}

export default Login;

import React from 'react';
import './css/navbar.css'; // Chemin vers le fichier CSS
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome, faHistory, faWrench, faSignOutAlt, faBell } from '@fortawesome/free-solid-svg-icons';

class Navbar extends React.Component {
  render() {
    return (
      <nav className="navbar">
        <div className="navbar-container container">
          <input type="checkbox" name="" id="" />
          <div className="hamburger-lines">
            <span className="line line1"></span>
            <span className="line line2"></span>
            <span className="line line3"></span>
          </div>
          <ul className="menu-items">
            <li>
              <FontAwesomeIcon icon={faHome} />
              <a href="#home">Accueil</a>
            </li>
            <li>
              <FontAwesomeIcon icon={faHistory} />
              <a href="#about">Historique</a>
            </li>
            <li>
              <FontAwesomeIcon icon={faWrench} />
              <a href="#food">Paramètres</a>
            </li>
            <li>
              <FontAwesomeIcon icon={faSignOutAlt} />
              <a href="#testimonials">Déconnexion</a>
            </li>
            <li>
              <FontAwesomeIcon icon={faBell} />
            </li>
          </ul>
          <h1 className="logo">ESPACES JEUNES</h1>
        </div>
      </nav>
    );
  }
}

export default Navbar;

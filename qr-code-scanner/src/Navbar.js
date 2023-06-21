import React from 'react';
import './css/navbar.css';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome, faHistory, faWrench, faSignOutAlt, faBell } from '@fortawesome/free-solid-svg-icons';
import { NavLink } from 'react-router-dom';

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
              <NavLink to="/accueil" exact activeclassname="active">Accueil</NavLink>
            </li>
            <li>
              <FontAwesomeIcon icon={faHistory} />
              <NavLink to="/historique" activeclassname="active">Historique</NavLink>
            </li>
            <li>
              <FontAwesomeIcon icon={faWrench} />
              <NavLink to="/parametres" activeclassname="active">Paramètres</NavLink>
            </li>
            <li>
              <FontAwesomeIcon icon={faSignOutAlt} />
              <NavLink to="/deconnexion" activeclassname="active">Déconnexion</NavLink>
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

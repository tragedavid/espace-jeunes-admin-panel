import React from 'react';
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';

import Navbar from './Navbar';
import Accueil from './Accueil';
import Historique from './Historique';
import Parametres from './Parametres';
import Deconnexion from './Deconnexion';
import Register from './Register';
import Login from './Login';

class App extends React.Component {
  render() {
    return (
      <Router>
        <div>
          <Routes>
            {/* Routes sans Navbar */}
            <Route path="/register" element={<Register />} />
            <Route path="/login" element={<Login />} />

            {/* Routes avec Navbar */}
            <Route path="*" element={<WithNavbarRoutes />} />
          </Routes>
        </div>
      </Router>
    );
  }
}

// Composant Wrapper pour les routes avec Navbar
const WithNavbarRoutes = () => (
  <>
    <Navbar />
    <Routes>
      <Route path="/" element={<Navigate to="/accueil" />} /> {/* Redirection vers /accueil */}
      <Route path="/accueil" element={<Accueil />} />
      <Route path="/historique" element={<Historique />} />
      <Route path="/parametres" element={<Parametres />} />
      <Route path="/deconnexion" element={<Deconnexion />} />
    </Routes>
  </>
);

export default App;

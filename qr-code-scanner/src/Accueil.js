import React from 'react';
import RoundedReseau from './RoundedReseau';
import './index.css';
import Navbar from './Navbar';

class Accueil extends React.Component {
  render() {
    return (
      <div className="accueil-page">
      <Navbar />
        <section className="showcase-area" id="showcase">
          <div className="showcase-container">
            <h1 className="main-title" id="home">Eat Right Food</h1>
            <p>Eat Healty, it is good for our health.</p>
            <a href="#food-menu" className="btn btn-primary">Menu</a>
          </div>
        </section>

        <section id="about">
          <div className="about-wrapper container">
            <div className="about-text">
              <p className="small">About Us</p>
              <h2>We've beem making healthy food last for 10 years</h2>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse ab
                eos omnis, nobis dignissimos perferendis et officia architecto,
                fugiat possimus eaque qui ullam excepturi suscipit aliquid optio,
                maiores praesentium soluta alias asperiores saepe commodi
                consequatur? Perferendis est placeat facere aspernatur!
              </p>
            </div>
            <div className="about-img">
              <img src="https://i.postimg.cc/mgpwzmx9/about-photo.jpg" alt="food" />
            </div>
          </div>
        </section>

        <section id="food">
          <h2>Types of food</h2>
          <div className="food-container container">
            <div className="food-type fruite">
              <div className="img-container">
                <img src="https://i.postimg.cc/yxThVPXk/food1.jpg" alt="error" />
                <div className="img-content">
                  <h3>fruite</h3>
                  <a
                    href="https://en.wikipedia.org/wiki/Fruit"
                    className="btn btn-primary"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    learn more
                  </a>
                </div>
              </div>
            </div>
            <div className="food-type vegetable">
              <div className="img-container">
                <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="error" />
                <div className="img-content">
                  <h3>vegetable</h3>
                  <a
                    href="https://en.wikipedia.org/wiki/Vegetable"
                    className="btn btn-primary"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    learn more
                  </a>
                </div>
              </div>
            </div>
            <div className="food-type grin">
              <div className="img-container">
                <img src="https://i.postimg.cc/76ZwsPsd/food3.jpg" alt="error" />
                <div className="img-content">
                  <h3>grin</h3>
                  <a
                    href="https://en.wikipedia.org/wiki/Grain"
                    className="btn btn-primary"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    learn more
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="food-menu">
          <h2 className="food-menu-heading">Food Menu</h2>
          <div className="food-menu-container container">
            <div className="food-menu-item">
              <div className="food-img">
                <img src="https://i.postimg.cc/wTLMsvSQ/food-menu1.jpg" alt="" />
              </div>
              <div className="food-description">
                <h2 className="food-title">Food Menu Item 1</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                  quae.
                </p>
                <p className="food-price">Price: &#8377; 250</p>
              </div>
            </div>

            <div className="food-menu-item">
              <div className="food-img">
                <img
                  src="https://i.postimg.cc/sgzXPzzd/food-menu2.jpg"
                  alt="error"
                />
              </div>
              <div className="food-description">
                <h2 className="food-title">Food Menu Item 2</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                  quae.
                </p>
                <p className="food-price">Price: &#8377; 250</p>
              </div>
            </div>
          </div>
        </section>

        <footer id="footer">
          <h2>Restraunt &copy; all rights reserved</h2>
        </footer>

        <RoundedReseau />
      </div>
    );
  }
}

export default Accueil;

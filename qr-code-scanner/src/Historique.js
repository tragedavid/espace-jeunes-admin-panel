import React from 'react';
import RoundedReseau from './RoundedReseau';
import './index.css';

class Historique extends React.Component {
  render() {
    return (
      <div>
        <section class="showcase-area" id="showcase">
              <div class="showcase-container">
                <h1 class="main-title" id="home">Historique</h1>
                <p>Eat Healty, it is good for our health.</p>
                <a href="#food-menu" class="btn btn-primary">Menu</a>
              </div>
            </section>

            <section id="about">
              <div class="about-wrapper container">
                <div class="about-text">
                  <p class="small">About Us</p>
                  <h2>We've beem making healthy food last for 10 years</h2>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse ab
                    eos omnis, nobis dignissimos perferendis et officia architecto,
                    fugiat possimus eaque qui ullam excepturi suscipit aliquid optio,
                    maiores praesentium soluta alias asperiores saepe commodi
                    consequatur? Perferendis est placeat facere aspernatur!
                  </p>
                </div>
                <div class="about-img">
                  <img src="https://i.postimg.cc/mgpwzmx9/about-photo.jpg" alt="food" />
                </div>
              </div>
            </section>
            <section id="food">
              <h2>Types of food</h2>
              <div class="food-container container">
                <div class="food-type fruite">
                  <div class="img-container">
                    <img src="https://i.postimg.cc/yxThVPXk/food1.jpg" alt="error" />
                    <div class="img-content">
                      <h3>fruite</h3>
                      <a
                        href="https://en.wikipedia.org/wiki/Fruit"
                        class="btn btn-primary"
                        target="blank"
                        >learn more</a
                      >
                    </div>
                  </div>
                </div>
                <div class="food-type vegetable">
                  <div class="img-container">
                    <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="error" />
                    <div class="img-content">
                      <h3>vegetable</h3>
                      <a
                        href="https://en.wikipedia.org/wiki/Vegetable"
                        class="btn btn-primary"
                        target="blank"
                        >learn more</a
                      >
                    </div>
                  </div>
                </div>
                <div class="food-type grin">
                  <div class="img-container">
                    <img src="https://i.postimg.cc/76ZwsPsd/food3.jpg" alt="error" />
                    <div class="img-content">
                      <h3>grin</h3>
                      <a
                        href="https://en.wikipedia.org/wiki/Grain"
                        class="btn btn-primary"
                        target="blank"
                        >learn more</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="food-menu">
              <h2 class="food-menu-heading">Food Menu</h2>
              <div class="food-menu-container container">
                <div class="food-menu-item">
                  <div class="food-img">
                    <img src="https://i.postimg.cc/wTLMsvSQ/food-menu1.jpg" alt="" />
                  </div>
                  <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 1</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                      quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                  </div>
                </div>

                <div class="food-menu-item">
                  <div class="food-img">
                    <img
                      src="https://i.postimg.cc/sgzXPzzd/food-menu2.jpg"
                      alt="error"
                    />
                  </div>
                  <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 2</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                      quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
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

export default Historique;

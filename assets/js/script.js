document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const navLinks = document.querySelectorAll(".nav-link");
  
    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  });
  
  const aboutCardsData = [
  {
    title: 'Survival-Centric Design',
    copy: 'Our energy solutions are engineered with the unique needs of a post-apocalyptic community in mind, ensuring collective resilience and well-being.',
    img: 'https://images.unsplash.com/photo-1517021897933-0e0319cfbc28?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800'
  },
  {
    title: 'Readily Available & Adaptable',
    copy: 'Outlast leverages an innovative, tech-enabled distribution network, providing seamless access to vital energy supplies even in the most challenging and unpredictable environments.',
    img: 'https://images.unsplash.com/photo-1533903345306-15d1c30952de?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800'
  },
  {
    title: 'Diverse Arsenal of Power',
    copy: 'We offer a comprehensive array of energy products, designed to address the varied and critical demands for power in any survival scenario.',
    img: 'https://images.unsplash.com/photo-1545243424-0ce743321e11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800'
  },
  {
    title: 'Future-Proofed Solutions',
    copy: 'We constantly innovate and adapt our energy technology\, researching new power sources and more efficient methods to ensure your survival needs are met as the apocalypse evolves\.',
    img: 'https://images.unsplash.com/photo-1531306728370-e2ebd9d7bb99?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800'
  }
];

const aboutGrid = document.getElementById('about-cards-grid');
aboutCardsData.forEach(card => {
  const div = document.createElement('div');
  div.className = 'col-12 col-sm-6 col-lg-3 d-flex';
  div.innerHTML = `
    <div class="about-card" style="background-image: url('${card.img}');">
      <div class="about-card-content">
        <h2 class="about-card-title">${card.title}</h2>
        <p class="about-card-copy">${card.copy}</p>
      </div>
    </div>
  `;
  aboutGrid.appendChild(div);
});

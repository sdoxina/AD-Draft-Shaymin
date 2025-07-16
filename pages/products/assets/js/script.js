document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("searchInput");
  const productCards = document.querySelectorAll(".product-card");

  searchInput.addEventListener("input", function () {
    const search = this.value.toLowerCase();

    productCards.forEach((card) => {
      const text = card.innerText.toLowerCase();
      card.style.display = text.includes(search) ? "block" : "none";
    });
  });
});

document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".card");
    const perPage = 8;
    let currentPage = 0;

    function showPage(page) {
        const startIndex = page * perPage;
        const endIndex = Math.min(startIndex + perPage, cards.length);
        cards.forEach((card, index) => {
            card.style.display = (index >= startIndex && index < endIndex) ? "block" : "none";
        });
    }

    function goToPage(page) {
        currentPage = page;
        showPage(currentPage);
        updatePaginationNumbers();
    }

    function goToNextPage() {
        if ((currentPage + 1) * perPage < cards.length) {
            goToPage(currentPage + 1);
        }
    }

    function goToPrevPage() {
        if (currentPage > 0) {
            goToPage(currentPage - 1);
        }
    }

    function updatePaginationNumbers() {
        const totalPages = Math.ceil(cards.length / perPage);
        const pageNumbers = document.getElementById("page-numbers");
        pageNumbers.innerHTML = ""; 

        const startPage = Math.max(0, currentPage - 2);
        const endPage = Math.min(totalPages - 1, currentPage + 2);

        if (startPage > 0) {
            const firstPageButton = document.createElement("button");
            firstPageButton.textContent = 1;
            firstPageButton.addEventListener("click", () => {
                goToPage(0);
            });
            pageNumbers.appendChild(firstPageButton);

            if (startPage > 1) {
                const ellipsis = document.createElement("span");
                ellipsis.textContent = "...";
                pageNumbers.appendChild(ellipsis);
            }
        }

        for (let i = startPage; i <= endPage; i++) {
            const pageNumberButton = document.createElement("button");
            pageNumberButton.textContent = i + 1;
            pageNumberButton.addEventListener("click", () => {
                goToPage(i);
            });
            pageNumbers.appendChild(pageNumberButton);
        }

        if (endPage < totalPages - 1) {
            if (endPage < totalPages - 2) {
                const ellipsis = document.createElement("span");
                ellipsis.textContent = "...";
                pageNumbers.appendChild(ellipsis);
            }

            const lastPageButton = document.createElement("button");
            lastPageButton.textContent = totalPages;
            lastPageButton.addEventListener("click", () => {
                goToPage(totalPages - 1);
            });
            pageNumbers.appendChild(lastPageButton);
        }
    }

    document.getElementById("next-page").addEventListener("click", goToNextPage);
    document.getElementById("prev-page").addEventListener("click", goToPrevPage);

    showPage(currentPage);
    updatePaginationNumbers();
});
// function onclick() {
//     var redirectTo = "stedu.php";

//     // Redirect to the specified URL
//     window.location.href = redirectTo;
// }

const form = document.getElementById("multi-page-form");
const pages = document.querySelectorAll(".page");
const prevButton = document.getElementById("prev-btn");
const nextButton = document.getElementById("next-btn");
const submitButton = document.getElementById("submit-btn");
let currentPage = 0;

function showPage(pageNumber) {
    pages.forEach((page, index) => {
        if (index === pageNumber) {
            page.classList.remove("hidden");
        } else {
            page.classList.add("hidden");
        }
    });

    prevButton.disabled = pageNumber === 0;
    nextButton.disabled = pageNumber === pages.length - 1;
    submitButton.classList.toggle("hidden", pageNumber !== pages.length - 1);
}

prevButton.addEventListener("click", () => {
    if (currentPage > 0) {
        currentPage--;
        showPage(currentPage);
    }
});

nextButton.addEventListener("click", () => {
    if (currentPage < pages.length - 1) {
        currentPage++;
        showPage(currentPage);
    }
});

form.addEventListener("submit", (e) => {
    e.preventDefault();
});

showPage(currentPage);
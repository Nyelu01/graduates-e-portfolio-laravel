
document.querySelector("#show-form").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
});

function displaySelectedCategory() {
    var categorySelect = document.getElementById("category");
    var selectedCategory = categorySelect.options[categorySelect.selectedIndex].text;
    var categoryBox = document.getElementById("category-box");
    var selectedCategoryBox = document.getElementById("selected-category-box");
    var selectedCategoryInput = document.getElementById("selectedCategory");

    if (categorySelect.value) {
        selectedCategoryInput.value = selectedCategory;
        categoryBox.style.display = "none";
        selectedCategoryBox.style.display = "block";
    }
}

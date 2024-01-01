// alert("alrto");
document.querySelector("#cookies").addEventListener("click", () => {
    document.querySelector(".cookies").style.display = "none";
});
document.querySelector(".ttt").addEventListener("mouseover", () => {
    document.querySelector(".ttt2").style.display = "block";
});
document.querySelector(".ttt2").addEventListener("mouseover", () => {
    document.querySelector(".ttt2").style.display = "block";
});
document.querySelector(".ttt").addEventListener("mouseout", () => {
    document.querySelector(".ttt2").style.display = "none";
});
document.querySelector(".ttt2").addEventListener("mouseout", () => {
    document.querySelector(".ttt2").style.display = "none";
});

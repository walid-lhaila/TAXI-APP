
const btnCard = document.getElementById('btnCard');
const dropDown = document.getElementById('dropDown');

btnCard.addEventListener('click', () => {
    dropDown.classList.toggle("scale-100");
    dropDown.classList.toggle("scale-0");
});
const notesContainer = document.querySelector(".notes-cont");
const createbtn = document.querySelector(".new_note");
let notes = document.querySelectorAll(".input-box");

createbtn.addEventListener("click", ()=>{
    let inputBox = document.createElement("textarea");
    let span = document.createElement("span")
    let ion = document.createElement("ion-icon");
    inputBox.setAttribute("type", "text");
    inputBox.className = "input-box";
    span.className = "del";
    ion.name = "trash";
    notesContainer.appendChild(inputBox);
    inputBox.appendChild(span).appendChild(ion);
})


notesContainer.addEventListener("click", function(e){
    if(e.target.tagName === "IMG"){
        e.target.parentElement.remove();
    }
})
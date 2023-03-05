let del = document.getElementsByClassName("del-btn");
// console.log(del);
Array.from(del).forEach((element)=>{
    element.addEventListener("click", (e)=>{
        // console.log("del", e.target.parentNode); 
        let sno = e.target.id;
        // let info = list.getElementsByClassName("workStyle")[0].innerText; 
        window.location = `index.php?delete=${sno}`;
        console.log(sno);
    })
})
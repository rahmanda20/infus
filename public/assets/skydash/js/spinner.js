const btns = document.querySelectorAll('button');
btns.forEach((items)=>{
    items.addEventListener('click',(evt)=>{
        evt.target.classList.add('activeLoading');
    }) 
})
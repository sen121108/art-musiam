window.addEventListener('load', function() {
    let list = document.getElementsByClassName("ans");
    const corrects = [2,4,3,1];
    let idGet = document.getElementById("getId");
    const confi = idGet.dataset.id;
    const corrctNumber = corrects[confi-1];
    
    let ansewer = document.getElementById("answer");
    let check = document.getElementById("check");
    let children = check.children;
    
    for(let i=0; i<list.length; i++) {
        
        list[i].addEventListener('click' , function() {
            const selectedNumber = this.dataset.num;
            
            check.style.display = 'block';
            if(corrctNumber == selectedNumber) {
                children[0].classList.add('maru');
                children[0].style.display = 'block';
                children[1].style.display = 'none';
                children[1].classList.remove('batu');
                ansewer.style.display = 'block';
                
            }else {
                children[1].classList.add('batu');
                children[1].style.display = 'block';
                children[0].style.display = 'none';
                children[0].classList.remove('maru');
            }
        });
        
    }//for内
});
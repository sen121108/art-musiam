window.addEventListener('load' , function() {
    
    let changeC = document.getElementsByClassName("pushChangeColor");
    let name = document.getElementsByClassName("content-name");
    
    
    
    for( let i = 0; i<changeC.length; i ++) {
      changeC[i].addEventListener("mousemove", function() {
        changeC[i].classList.add('on');
        changeC[i].classList.remove('off');
        
        
      });  
      changeC[i].addEventListener("mouseleave", function() {
        changeC[i].classList.add('off');
        changeC[i].classList.remove('on');
       
      });  
    }//for文終了
    
    
  
    
});

function check() {
    let result = window.confirm('管理者で間違いないですか？');
    if(result) {
        return true;
    }else {
        window.alert('キャンセルされました');
        return false;
    }
    
}

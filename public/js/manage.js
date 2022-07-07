function check() {
    let result = window.confirm('投稿してもよろしいでしょうか？');
    if(result) {
        return true;
    }else {
        window.alert('投稿をキャンセルしました。')
        return false;
    }
}

window.addEventListener('load', function() {
   let open = document.getElementById('goDelete'); 
   let openTarget = document.getElementById('delete');
   openTarget.style.display="none";
   open.addEventListener('click', function() {
       let con = window.confirm('本当によろしいですか？');
       if(con == true) {
        openTarget.style.display ="flex";    
       }
   })
   
});
function check() {
    let result = window.confirm('投稿してもよろしいでしょうか？');
    if(result) {
        return true;
    }else {
        window.alert('投稿をキャンセルしました。')
        return false;
    }
}
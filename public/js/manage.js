function check() {
    let result = window.confirm('投稿してもよろしいでしょうか？');
    if(result) {
        window.alert('正常に投稿が完了しました。')
        return true;
    }else {
        window.alert('投稿をキャンセルしました。')
        return false;
    }
}
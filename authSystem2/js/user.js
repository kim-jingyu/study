function authCheck(needLevel, userLevel) {
    if (needLevel == userLevel) {
        return true;
    }
    return false;
}

function goMenu(code, userLevel) {
    switch (code) {
        case '1018':
            if (authCheck('admin', userLevel)) {
                location.href = './fireAttack.php';
                break;
            } else {
                alert('권한이 없습니다.');
            }
            break;
        case '1129':
            location.href = './logout.php';
        default:
            alert('없는 메뉴입니다.');
    }
}
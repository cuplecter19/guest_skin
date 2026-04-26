<script language='JavaScript'>
// [수정 4] null 체크 추가 — 엘리먼트가 없을 때 JS 오류 방지
function comment_wri(name, id) {
    var layer = document.getElementById(name+id);
    if (!layer) return;
    layer.style.display = (layer.style.display == "none") ? "block" : "none";
}

function comment_delete(url)
{
    if (confirm("이 코멘트를 삭제하시겠습니까?")) location.href = url;
}
</script>

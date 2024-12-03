document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
});
document.onselectstart = function () {
    return false;
};

document.addEventListener("keydown", function (e) {
    if (e.keyCode === 123 || (e.ctrlKey && e.shiftKey && e.keyCode === 73)) {
        // F12 or Ctrl+Shift+I
        alert("Inspecting elements is disabled!");
        return false;
    }
});

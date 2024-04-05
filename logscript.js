document.getElementById('admin').onclick = function() {
    document.getElementById('adminForm').style.transform = 'rotateY(0deg)';
    document.getElementById('studentForm').style.transform = 'rotateY(-180deg)';
};

document.getElementById('student').onclick = function() {
    document.getElementById('adminForm').style.transform = 'rotateY(180deg)';
    document.getElementById('studentForm').style.transform = 'rotateY(0deg)';
};


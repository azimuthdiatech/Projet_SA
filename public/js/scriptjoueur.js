
const statut = document.getElementById('nom_img');
const img = document.getElementById('img_ins_avatar');
if (window.FileList && window.File && window.FileReader) {
    document.getElementById('file_ins').addEventListener('change', event => {
        img.src = '';
        statut.textContent = '';
        const file = event.target.files[0];
        if (!file.type) {
            statut.textContent = 'Error:le type de fichier est non supporte';
            return;
        }
        if (!file.type.match('image.*')) {
            statut.textContent = 'Error: seul les images sont accepter.';
            return;
        }
        const reader = new FileReader();
        reader.addEventListener('load', event => {
            img.src = event.target.result;
            statut.innerText = `${file.name}`;
        });
        reader.readAsDataURL(file);
    });
}
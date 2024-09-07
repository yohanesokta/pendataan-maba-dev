const env = {
    'cloudname' : 'dgxbyse13',
    'preset' : 'penugasan',
}

const url = `https://api.cloudinary.com/v1_1/${env['cloudname']}/image/upload`;

const button = document.getElementById('button-s');
const fileInput = document.getElementById('file');

const fileInputB = document.getElementById('file2')
async function upload() {
    console.log('jalan1')
    const link = document.getElementById('linklink')
    const file = fileInput.files[0];
    const formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', env['preset']);
     try {
            const response = await fetch(url, {
                method: 'POST',
                body: formData
            });

            const data = await response.json();
            console.log('File uploaded successfully:', data);
            link.disable = false
            link.value = data.url
            link.removeAttribute('disabled')
            if (String(document.getElementById('linklink2').value).length > 0){
                button.removeAttribute('disabled')
            }


        } catch (error) {
            console.error('Error uploading file:', error);
            alert('Gagal Upload , Jika selalu hubungi admin : YOHANES OKTANIO');
        }
}


async function uploaded() {
    console.log('upload2')
    const link = document.getElementById('linklink2')
    const file = fileInputB.files[0];
    const formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', env['preset']);

     try {
            const response = await fetch(url, {
                method: 'POST',
                body: formData
            });

            const data = await response.json();
            console.log('File uploaded successfully:', data);
            link.disable = false
            link.value = data.url
            link.removeAttribute('disabled')
            if (String(document.getElementById('linklink').value).length > 0){
                button.removeAttribute('disabled')
            }

        } catch (error) {
            console.error('Error uploading file:', error);
            alert('Gagal Upload , Jika selalu hubungi admin : YOHANES OKTANIO');
        }
}

fileInput.addEventListener('change',()=> {upload()})
fileInputB.addEventListener('change', ()=> {uploaded()})

const file = document.getElementById('file')
document.getElementById('jumlah').addEventListener('click',()=> {
    window.location.href = "/lihat"
})

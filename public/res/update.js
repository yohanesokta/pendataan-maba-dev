const formComponent = document.getElementById('form')
const csrf = formComponent?.innerHTML
const loader = document.getElementById('loader')
const infoContainer = document.getElementById('info-container');
const componentInfo = (img,msg) => {
    return `<div class="info">
            <img width="100" height="100" src="${img}" alt="x"/>
            <p>${msg}</p>
            <button id="info" onclick="btnInfo()">Tutup</button>
        </div>`
}
const component = (nama, nim, webs) => {
    if (webs) {
        return `${csrf}<label for="nama">nama  </label>
        <input type="text" name="nama" id="nama" value="${nama}" disabled>
        <input type="hidden" name="nimid" id="nimid" value="${nim}">
        <label for="nim">nim  </label>
        <input type="text" name="nim" id="nim" value="${nim}" disabled>
        <label for="website">Website</label>
        <input type="text" name="website" id="website" placeholder="belum ada" value="${webs}" disabled>
        <button disabled class="btn-dis">Update</button>`
    } else {
        return `${csrf}<label for="nama">nama  </label>
        <input type="hidden" name="nimid" id="nimid" value="${nim}">
        <input type="text" name="nama" id="nama" value="${nama}" disabled>
        <label for="nim">nim  </label>
        <input type="text" name="nim" id="nim" value="${nim}" disabled>
        <label for="website">Website</label>
        <input type="text" name="website" id="website" placeholder="tambahkan website" value="" required>
        <div class="verif">
            <input type="checkbox" name="auth" id="auth" required>
            <label for="auth">saya yakin semua benar</label>
        </div>
        <button>Update</button>`
    }
}

async function getUsers(nim) {
    formComponent.innerHTML = ""
    loader.style.display = 'flex'
    let data = await fetch(`/api/data/?nim=${nim}`, {
        method: 'GET'
    })
    data = await data.json()
    loader.style.display = 'none'

    if (data.length < 1 ) {
        infoContainer.innerHTML = componentInfo('https://img.icons8.com/bubbles/100/x.png','Datamu tidak dapat ditemukan atau tidak terdaftar')
        infoContainer.style.display = 'flex'
        return
    }
    const comp = component(data[0].nama, data[0].nim, data[0].web)

    formComponent.innerHTML = comp
}

const btn = document.getElementById('nim-submit')
btn.addEventListener('click', e => {
    const value = document.getElementById('nim').value
    getUsers(value);
})

function btnInfo () {
    infoContainer.innerHTML = ""
    infoContainer.style.display = 'none'
}

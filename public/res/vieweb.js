let default_component = `<div class="header">
                <div class="field">Image</div>
                <div class="field">Name</div>
                <div class="field">Web</div>
            </div>`


async function update(val) {
    let data = await fetch('/api/view/?data=' + val);
    data = await data.json();
    let component = ""
    data.forEach(element => {
        const status = (element.web == null) ? "off" : "ative"
        component += `<a href="${element.web}" target="_blank" class="list">
                <div class="field"><img src="${element.fotoformal}"
                        alt=""></div>
                <div class="field"><span>${element.nama}</span></div>
                <div class="field"><span style="color:${(status == "ative") ? "green" : "red"};">${status}</span></div>
            </a>`

    });

    document.getElementById('table').innerHTML = default_component + component

}

update('all')

document.getElementById('kel-sec').addEventListener('change', (e) => {
    e.preventDefault()
    update(document.getElementById('kel-sec').value)
})
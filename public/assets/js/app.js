

$(".alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});

function makePassword() {
    let passwordInput = document.getElementById('password');
    let caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!';
    let newPassword = Array.from({ length: 20 }, () => caracteres[Math.floor(Math.random() * caracteres.length)]).join('');
    passwordInput.value = newPassword;
}

function displayFileName(inputID) {
    let input = document.getElementById(inputID);
    let fileNameDisplay = document.getElementById('fileName');
    let fileLabelDisplay = document.getElementById('fileLabel');

    if(inputID == 'image'){
        let fileLabel = `<br><strong>Altere as posições das imagens conforme sua preferência.</strong>`
        if (input.files.length > 0) {
            let filenames = ''
            for (let i = 0; i < input.files.length; i++) {
                filenames += `<div class="displayImage">
                                <img src="${URL.createObjectURL(input.files[i])}" alt="${input.files[i].name}" title="${input.files[i].name}" class="rounded float-left img-project m-2">
                                ${i > 0 ? `<button class="btn btn-secondary btn-sm m-2" onclick="moveImage(${i}, 'up')"><i class="fa-solid fa-arrow-up p-1 m-0"></i></button>` : ''}
                                ${i < input.files.length - 1 ? `<button class="btn btn-secondary btn-sm m-2" onclick="moveImage(${i}, 'down')"><i class="fa-solid fa-arrow-down p-1 m-0"></i></button>` : ''}
                            </div>`;
            }
            fileLabelDisplay.innerHTML = fileLabel;
            fileNameDisplay.innerHTML = filenames;
        } else {
            fileNameDisplay.innerHTML = '';
        }
    }else if(inputID == 'icon'){
        if (input.files.length > 0) {
            fileNameDisplay.innerHTML = '<i class="fa-solid fa-file-circle-check"></i> ' + input.files[0].name;
        } else {
            fileNameDisplay.innerHTML = '';
        }
    
    }
    
}

function moveImage(index, direction) {
    const input = document.getElementById('image');
    const files = Array.from(input.files);

    if ((direction === 'up' && index > 0) || (direction === 'down' && index < files.length - 1)) {
        const temporary = files[index + (direction === 'up' ? -1 : 1)];
        files[index + (direction === 'up' ? -1 : 1)] = files[index];
        files[index] = temporary;

        const newFileList = new DataTransfer();
        files.forEach(file => newFileList.items.add(file));

        input.files = newFileList.files;

        displayFileName('image');
    }
}



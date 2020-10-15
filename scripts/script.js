function exibirCategoria(categoria) {
    
    let prod = document.getElementsByClassName('box-item');
    for (let i = 0; i < prod.length; i++) {
        if (categoria == prod[i].id) {
            prod[i].style.display = "block";
        }
        else{
            prod[i].style.display = "none";
        }
    }
}

let todasCategoria = () => {
    let prod = document.getElementsByClassName('box-item');
    for (let i = 0; i < prod.length; i++) {
        prod[i].style.display = "block";
    }
}

let destaque = (img) => {
    if (img.width == 120) {
        let s = img.width;
        img.width = (2*s);
    }
    else {
        img.width = 120;
    }
    
}
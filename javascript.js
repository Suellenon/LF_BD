


// function  barra_lateral(){
//     const menuLateral= document.getElementById('versao-mobile');
   
    
//     const btnLateral= document.getElementById('btn-lateral');
    

//     if('click'){
//     btnLateral.src="../imgs/close1.png";
//     btnLateral.style.width="20px";
//     menuLateral.classList.toggle('abrir')
//    }    
//     }
   
function barra_lateral() {
    const menuLateral = document.getElementById('versao-mobile');
    const btnLateral = document.getElementById('btn-lateral');

    // Verifica se a classe 'abrir' está presente no menuLateral
    const isOpen = menuLateral.classList.contains('abrir');

    if (!isOpen) {
        // Se o menu lateral estiver fechado, abre
        btnLateral.src = "../imgs/closetest.png";
        btnLateral.style.width = "25px";
        menuLateral.classList.add('abrir');
    } else {
        // Se o menu lateral estiver aberto, fecha
        btnLateral.src = "../imgs/test.png"; // Aqui você define o caminho do ícone de hambúrguer
        btnLateral.style.width = "30px"; // Remove a largura definida (volta ao padrão)
        menuLateral.classList.remove('abrir');
    }
}


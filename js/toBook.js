var index = 1
function changeIMG() {
    var imgs = ['imgToBook/imgRestRoom/eaZMvwm9bt88p4uffUtx.jpg',
                'imgToBook/imgRestRoom/Phong-ngu-khach-san-mini.jpg',
                'imgToBook/imgRestRoom/phZkTiteCXBKI58c-D9G.jpg',
                'imgToBook/imgRestRoom/DJyN73GUPRQLrxEpMsCM.jpg'
               ];
    document.getElementById('imgRR').src = imgs[index];
    index++;
    if(index==4){
        index = 0;
    }
}
setInterval(changeIMG,3000)


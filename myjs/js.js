function op(x,y,z){
$(x).fadeIn()
if(y,z){
    $(y).load(z);
}
}
function cl(x){
    $(x).fadeOut();
}
// 預覽圖片
// $('#imageInput').on('change', (e) => {
//     var file = e.target.files[0];
//     if (file) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#previewImage').attr('src', e.target.result);
//             $('#previewImage').show();
//         };
//         reader.readAsDataURL(file);
//     }
// });
function previewImage(){
    $(document.body).on('change', '.imageInput', function (e) {
        let file = e.target.files[0];
        let target =$(e.target).parent().find('.previewImage');
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                target.attr('src', e.target.result);
                target.show();
        };
        reader.readAsDataURL(file);
    }
}); 
}


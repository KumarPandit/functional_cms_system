$(document).ready(function() {
//EDITOR CKEDITOR
    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.log(error);
        });
    //Rest Code

$('#selectAllBoxes').click(function (event) {
if(this.checked){
    $('.checkBoxes').each(function(){

       this.checked = true;
    });
} else {


    $('.checkBoxes').each(function(){
        this.checked = false;
    })
}
})


});

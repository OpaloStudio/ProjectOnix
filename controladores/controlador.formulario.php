<script>
var inputs = document.getElementsByClassName('formularioInput');
for(var i=0; i < inputs.length; i++){
    function desplazamiento(){
        if(this.value.length >= 1){
            this.nextElementSibling.classList.add('fijar');
        } else{
            this.nextElementSibling.classList.remove('fijar');
        }
    });
}
</script>
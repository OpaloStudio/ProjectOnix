<script>
    var titulo = null;
    var descripcion  = null;
    var links  = null;
    var codigo  = null;

function livetext(){
    titulo = $("#titulo").val();
    $("#tituloPlantilla").text(titulo);
    
    descripcion = $("#descripcion").val();
    $("#descripcionPlantilla").text(descripcion);

    links = $("#links").val();
    $("#linksPlantilla").text(links);

    codigo = $("#codigo").val();
    $("#codigoPlantilla").text(codigo);

}
</script>
<?php 
$general_css_link = "./styles/general.css";
$page_css_link = "./styles/index.css";
$page_title = "Asstec3 - Inormatique - Bureautique - Photocopieur Oise - Cybersécurité Oise - Infogérance Oise & Chambly";

include './includes/header.php';
?>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
    <model-viewer
    src="./Blender/Logo_V9_No_Camera_No_Light.glb"
    ar
    ar-modes="webxr scene-viewer quick-look"
    camera-controls
    poster="poster.webp"
    shadow-intensity="1"
    environment-image="./assets/music_hall_01_1k.hdr"
    camera-orbit="1.163deg 90.11deg 4.776m"
    field-of-view="30deg"
    disable-zoom
    disable-tap
    auto-rotate
    interaction-prompt="none"

    class="model_viewer" id="model_3D">

    <script>
var model = document.getElementById("model_3D");
var timer;
model.addEventListener("camera-change", function() {
  clearTimeout(timer);
  timer = setTimeout(resetCameraOrbit, 1500); //1000 = 1s
});
function resetCameraOrbit() {
  model.setAttribute("camera-orbit", "1.163deg 90.11deg 4.776m");
  //model.setAttribute("camera-target", "0m 0m 0m");
  //model.setAttribute("camera-zoom", "1");
  //model.setAttribute("field-of-view", "30deg");
}

model.addEventListener("camera-change", () => {
    console.log("camera-orbit".innerHTML)
})
</script>


<?php include './includes/footer.php'; ?>
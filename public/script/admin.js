$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$(function () {
  $('[data-toggle="popover"]').popover()
})

function previewImg() {
  const gambar = document.querySelector("#gambar");
  const gambarLabel = document.querySelector(".custom-file-label");
  const imgPreview = document.querySelector(".img-preview");

  gambarLabel.textContent = gambar.files[0].name;
  const fileGambar = new FileReader();
  fileGambar.readAsDataURL(gambar.files[0]);

  fileGambar.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}

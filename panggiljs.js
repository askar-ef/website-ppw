// Optional: Menambahkan penanganan klik untuk semua elemen <a> dengan href berawalan "#"
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    // Scroll ke elemen target dengan efek smooth
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// 1
var clickCounts = {};

function showButtons(id) {
  if (!clickCounts[id]) {
    clickCounts[id] = 0;
  }

  clickCounts[id]++;

  var updateButton = document.getElementById("update-button-" + id);
  var deleteButton = document.getElementById("delete-button-" + id);

  if (clickCounts[id] >= 2) {
    updateButton.style.display = "inline-block";
    deleteButton.style.display = "inline-block";
  }

  setTimeout(function () {
    updateButton.style.display = "none";
    deleteButton.style.display = "none";
    clickCounts[id] = 0;
  }, 5000);
}

function confirmDelete(id) {
  if (confirm("Serius pengen dihapus?")) {
    document.getElementById("delete-form-" + id).submit();
  }
}

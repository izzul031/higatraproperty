<?php
    include 'kon/koneksi.php';
    $bast = mysqli_query($conn, "SELECT * FROM bast");
    ?>

    <div class="container-3">
        <h1>BAST</h1>
        <h4>(Berita Acara Serah Terima)</h4>
        <?php while ($row = mysqli_fetch_assoc($bast)): ?>
            <div class="card">
                <img alt="<?= $row['deskripsi']; ?>" height="300" src="images/bast/<?= $row['gambar']; ?>" width="300" />
                <div class="card-description">
                    <?= $row['deskripsi']; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <div class="modal" id="myModal">
        <span class="close" id="closeModal">&times;</span>
        <img class="modal-content" id="img01" />
    </div>

    <script>
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        var closeModal = document.getElementById("closeModal");

        document.querySelectorAll('.card img').forEach(img => {
            img.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
            }
        });

        closeModal.onclick = function() {
            modal.style.display = "none";
        }

        // Close modal when clicking outside of the modal content
        modal.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>
<?php include '../extend/header.php'; ?>

<div class="row">
    <div class="col s12">
        <h2 class="header">Actualizar foto de perfil</h2>
        <div class="card horizontal">
            <div class="card-image">
                <img src="../usuarios/<?php echo $_SESSION['foto']; ?>" width="200" height="200">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <form action="up_foto.php" method="post" enctype="multipart/form-data">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Foto:</span>
                                <input type="file" name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <button type="submit" class="btn">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../extend/scripts.php'; ?>

</body>
</html>

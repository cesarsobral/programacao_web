<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <div class="form-wrapper">
        <h1>Revele seu signo</h1>
        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
    </div>
</div>

<?php include('layouts/footer.php'); ?>

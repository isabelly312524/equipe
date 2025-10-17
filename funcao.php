<?php
function renderizar_card_membro($membro) {
    echo '
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <img 
                src="img/' . htmlspecialchars($membro["imagem"]) . '" 
                class="card-img-top zoom-img" 
                alt="Foto de ' . htmlspecialchars($membro["nome"]) . '"
                style="object-fit: cover; height: 250px;"
            >
            <div class="card-body">
                <h5 class="card-title">' . htmlspecialchars($membro["nome"]) . '</h5>
                <h6 class="card-subtitle mb-2 text-muted">' . htmlspecialchars($membro["cargo"]) . '</h6>
                <p class="card-text">' . htmlspecialchars($membro["bio"]) . '</p>
            </div>
        </div>
    </div>';
}
?>


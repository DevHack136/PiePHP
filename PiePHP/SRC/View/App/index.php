<div class="divBTN">
    <button class="btn" onclick="window.location='/Projets_Git/PiePHP/PiePHP/user/RenderInfosUtilisateur'">
        <i class="fa-solid fa-eye"></i>
            <strong>Infos de l'Utilisateur</strong>
        <i class="fa-solid fa-eye"></i>
    </button>

    <button class="btn" onclick="window.location='/Projets_Git/PiePHP/PiePHP/user/RenderInfosTousUtilisateurs'">
        <i class="fa-solid fa-eye"></i>
            <strong>Infos de tous les Utilisateurs</strong>
        <i class="fa-solid fa-eye"></i>
    </button>

    <button class='btn' onclick="window.location='/Projets_Git/PiePHP/PiePHP/user/RenderUpdate'">
        <i class="fa-solid fa-pen-to-square"></i>
            <strong>Modifer les Infos de l'Utilisateur</strong>
        <i class="fa-solid fa-pen-to-square"></i>
    </button>

    <button class='btn' onclick="window.location='/Projets_Git/PiePHP/PiePHP/user/RenderDelete'">
        <i class="fa-sharp fa-solid fa-trash-can"></i>
            <strong>Supprimer le Compte</strong>
        <i class="fa-sharp fa-solid fa-trash-can"></i>
    </button>

    <button class='btn' onclick="window.location='/Projets_Git/PiePHP/PiePHP/user/logout'">
        <i class="fa-solid fa-power-off"></i>
            <strong>Déconnexion</strong>
        <i class="fa-solid fa-power-off"></i>
    </button>
</div>

<style>
    .divBTN {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .btn {
        display: inline-flex;
        text-align: center;
    }
    .btn, i {
        padding-left: 0;
        padding-right: 0;
        padding-top: 2px;
        margin-left: 10px;
        margin-right: 10px;
    }
</style>
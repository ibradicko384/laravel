function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')) {
        return true; // Suivre le lien
    } else {
        return false; // Annuler l'action
    }
}
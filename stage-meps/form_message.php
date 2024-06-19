<style>

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

#successMessage {
    animation: fadeIn 3s;
}

</style>

<form id="message_post" name="message_post" action="message_post.php" method="post">
<input type="text" placeholder="Entrer votre message" class="form-control" id="texte" name="texte" required>
<br>
<input type="email"   placeholder="Entrer votre mail" class="form-control" id="email_auteur" name="email_auteur" required>
    <button type="submit">
        Envoyer
    </button>
    <div id="successMessage" style="display:none; color: green; text-align: center; margin-top: 20px;"></div>
</form>




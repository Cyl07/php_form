<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
        <label  for="prenom">Prenom :</label>
        <input  type="text"  id="prenom"  name="user_lastname">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <select name="user_language">
            <option value="">Choisissez votre language préféré</option>
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">JS</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
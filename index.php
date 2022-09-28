<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phone">Phone :</label>
        <input  type="tel"  id="phone"  name="user_phone">
    </div>
    <div>
        <label for="subject">Choisit un theme :</label>
        <select name="user_subject" id="subject">
            <option value="Aucun theme particulier">--Selectionner un théme--</option>
            <option value="Environnement">Environnement</option>
            <option value="Bien être animal">Bien être animal</option>
            <option value="Recyclage">Recyclage</option>
            <option value="Energies Renouvelables">Energies Renouvelables</option>
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

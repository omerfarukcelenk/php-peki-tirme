<form action="gonder.php" method="POST" enctype="multipart/form-data">
    <!-- 
        input
        textarea
        file
        select
        radio
        checkbox
        multiple select
        button
     -->

    Ad: <br>
    <input type="text" readonly value="omer" name="ad">
    <br>
    <hr>
    Hakkımda: <br>
    <textarea name="hakkimda" cols="50" placeholder="Hakkımda" rows="5"></textarea>
    <hr>
    Meslek: <br>
    <select name="meslek">
        <option>-- Seç --</option>
        <option value="web-dev.">Wep DEV.</option>
        <option selected value="front-dev.">Frontand DEV.</option>
        <option value="back-dev.">Backand DEV.</option>
    </select>
    <hr>
    Cinsiyet: <br>
    <label>
        <input type="radio" name="cinsiyet" value="erkek">Erkek
        <input type="radio" name="cinsiyet" value="kadın">Kadın
    </label>
    <hr>
    İlgi Alanları: <br>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="php">PHP
    </label>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="html">HTML
    </label>
    <label>
        <input type="checkbox" name="ilgi_alani[]" value="css">CSS
    </label>
    <hr>
    Fotoğraf: <br>
    <input type="file" name="fotograf">
    <hr>
    Meslek: <br>
    <select name="meslek2[]" multiple size="5">
        <option>-- Seç --</option>
        <option value="web-dev.">Wep DEV.</option>
        <option value="front-dev.">Frontand DEV.</option>
        <option value="back-dev.">Backand DEV.</option>
    </select>
    <hr>
    <button type="submit">Gönder</button>


</form>
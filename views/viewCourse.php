<?php require_once('header.html'); ?>
    <form action="index.php?action=controllerCourses/addOneCourse" method="post">
        <h2>Ajout d'un nouveau cours</h2>

        <center>
            <table>
                <tr>
                    <td>Code du cours:</td>
                    <td><input type="text" name="courseCode" size="50" maxlength="50"></td>
                </tr>
                <tr>
                    <td>Titre du cours:</td>
                    <td><input type="text" name="courseTitle" size="50" maxlength="150"></td>
                </tr>
                <tr>
                    <td>Langue du cours:</td>
                    <td><input type="text" name="courseLangage" size="50" maxlength="50"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="reset" name="effacer" value="Effacer">
                    <input type="submit" name="enregistrer" value="Enregistrer">
                </td>
                </tr>
            </table>
        </center>
    </form>
<?php require_once('footer.html');
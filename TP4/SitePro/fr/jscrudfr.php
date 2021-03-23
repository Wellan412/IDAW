<table class="tableCV">
            <tbody id="tableau">
                <tr class="tableheader">
                    <td class="c1"> Nom </td>
                    <td class="c2"> Prénom </td>
                    <td class="c3"> Date de Naissance</td>
                    <td class="c4"> J'aime les cours Web </td>
                    <td class="c5"> Remarques </td>
                    <td class="c6"> CRUD</td>
                </tr>

            </tbody>
        </table>



<form onsubmit="onFormSubmit();" autocomplete="off"> 
    <table>
        <tr>
            <th id='mandatory'>Nom</th>
            <td><input type="text" id="nom" name="Nom"></td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td><input type="text" id="prenom" name="prenom"></td>
        </tr>
        <tr>
            <th>Date de Naissance</th>
            <td><input type="text" id="date" name="date" placeholder="dd/mm/YYYY"></td>
        </tr>
        <tr>
            <th>Adore le cours</th>

            <td><input type="checkbox" id="cours" name="adorecours"></td>
  
        </tr>
        <tr>
            <th>Remarques</th>

            <td><input type="text" id="rmq" name="remarques"></td>
  
        </tr>   
        <tr>
            <th></th>
            <td><input type="submit" id="Submit" value="Soumettre" /></td>
    </tr>    
        </table>
</form>

<p id="ptest"> Texte </p>

<script>
    function onFormSubmit() {
        let nom = document.getElementById('nom').value;
        let prenom = document.getElementById('prenom').value;
        let date = document.getElementById('date').value;
        let cours = document.getElementById('cours').value;
        let rmq = document.getElementById('rmq').value;
        if( nom != ""){
            document.getElementById('tableau').innerHTML += "<tr> <td class='c1'> "+ nom +"</td> <td class='c2'>" + prenom +" </td> <td class='c3'> "+date+"</td> <td class='c4'>" +cours+" </td> <td class='c6'>" + rmq  +"</td> <td class='c6'> <button><a onclick='delete();'> Delete </a></button> <button> <a onclick='edit();'> Edit </a></button></td> </tr>" ;
        }
        else{
            document.getElementById('mandatory').innerText = '  Nom OBLIGATOIRE';
        }

    // prevent the form to be sent to the server
    event.preventDefault();
   
    }

    function delete(){
        let ptest = document.getElementById('ptest').textContent = ' j\'ai réussi à modifier le texte '; 
    }

    
</script> 
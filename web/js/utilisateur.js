/*
 *  Partie Type de Utilisateur
 *
 */

function ajout_groupe_form()
{
    $('#groupe_form').toggle(true);
}

function suppression_statut(id)
{

    $.post('/parametrages/statuts/suppressionstatut',
    {statutId:id},
    function(data)
    {
        $("#listeStatut").html(data);
    });
}

/*
 *  Partie Type de Projet
 *
 */

//Function générique de suppression a faire
function suppression_type(id)
{
     $.post('/parametrages/typeprojets/suppressiontype',
     {typeId: id},
     function(data)
     {
          $("#listeType").html(data);

     });
}

function validation_statut(id)
{
    alert('jjj');
    code = $("#statut_code_"+id).val();
    nom = $("#statut_nom_"+id).val();
    couleur =$("#statut_couleur_"+id).val();
    type =$("#statut_type_"+id).val();

    $.post('/parametrages/statuts/editionstatut',
    {
        statut:
            {
                "statut_nom": nom,
                "statut_code": code,
                "statut_type": type,
                "statut_couleur":couleur
            },
            "statut_id":id
    },function(data)
    {
        $("#listeStatut").html(data);
        $(".row_edit_"+id).hide();
        $(".row_"+id).show();

    });

}

function validation_type(id)
{
    code = $("#projet_type_code_"+id).val();
    nom = $("#projet_type_nom_"+id).val();
    couleur =$("#projet_type_couleur_"+id).val();
    $.post('/parametrages/typeprojets/editiontype',
    {
        projetType:
            {
                "projet_type_nom": nom,
                "projet_type_code": code,
                 "projet_type_couleur":couleur
            },
            "projet_type_id":id
    },function(data)
    {
        $("#listeType").html(data);
        $(".row_edit_"+id).hide();
        $(".row_"+id).show();

    });

}
//On active
function edition(id)
{
   $(".row_edit_"+id).show();
    $(".row_"+id).hide();
}

